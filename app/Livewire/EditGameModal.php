<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\Player;
use App\Models\PlayersTournament;
use App\Models\Rondas;
use App\Models\turnero;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On;

class EditGameModal extends Component
{
    public $game, $gameId, $player1, $player2, $mesa, $estatus, $estatusall;
    public $estatus_id, $grupo_id, $player1_id, $player2_id, $ronda, $gameExists;
    public $grupos = [];
    public $rondas = [];
    public $playersAll = [];
    public $fromTable;
    public $modecurrent;
    public $esRondaGrupos = false;
    public $idtournament = 15; // CAMBIAR ESTO CADA TORNEO DIFERENTE O TORNEO CREADO O EN CURSO

    public function mount()
    {
        foreach (range('A', 'P') as $letter) {
            $this->grupos[$letter] = "Grupo $letter";
        }
        $this->getStatusAll();
        $this->getRondasAll();
    }

    public function getStatusAll()
    {
        $this->estatusall = EstatusTurner::where('id', 2)->get();
    }
    public function getplayersAll()
    {
        $this->playersAll = Player::all();
    }
    public function getRondasAll()
    {
        $this->rondas = Rondas::all();
    }

    #[On('openEditGameModal')]
    public function loadGame($id = null, $from = null, $mode = 'edit')
    {
        $this->resetValidation();
        $this->resetErrorBag();

        $this->fromTable = $from;
        $this->modecurrent = $mode; // 🔥 primero el modo

        if ($mode === 'edit' && $id) {

            $game = Turnero::with([
                'player1',
                'player2',
                'mesa',
                'ronda',
                'estatus'
            ])->findOrFail($id);

            $this->gameId = $game->id;

            $this->ronda = $game->ronda->id;
            $this->esRondaGrupos = $this->ronda == Rondas::GRUPOS;

            $this->grupo_id = $game->id_grupo;

            // 🔥 Cargar jugadores antes de asignar ids
            if ($this->esRondaGrupos && $this->grupo_id) {
                $this->getPlayersAllByGroup($this->grupo_id);
            } else {
                $this->getplayersAll();
            }

            // 🔥 Ahora sí asignar
            $this->player1_id = $game->id_jugador_1;
            $this->player2_id = $game->id_jugador_2;

            $this->estatus_id = $game->estatus->id;
            $this->mesa = $game->mesa->name ?? 'Sin mesa / En espera';
        } else {
            $this->reset([
                'gameId',
                'player1',
                'player2',
                'mesa',
                'estatus',
                'estatus_id',
                'grupo_id',
                'ronda',
                'playersAll',
                'esRondaGrupos',
                'player1_id',
                'player2_id'
            ]);
        }

        $this->dispatch('show-edit-modal');
    }

    public function updatedRonda($id)
    {
        $this->esRondaGrupos = $id == Rondas::GRUPOS;

        if (!$this->esRondaGrupos) {
            $this->grupo_id = null;
            $this->getplayersAll();
        }
    }

    public function getPlayersAllByGroup($group)
    {
        $this->playersAll = PlayersTournament::where('id_tournament', $this->idtournament)
            ->where('grupo', $group)
            ->with('player')
            ->get()
            ->pluck('player');
    }

    public function updatedGrupoId($id)
    {
        if (!$id) return;

        // 🔥 Si estamos cargando desde loadGame no resetear nada
        if ($this->modecurrent === 'edit' && $this->gameId) {
            $this->reset(['player1_id', 'player2_id']);
            $this->getPlayersAllByGroup($id);
            return;
        }

        // $this->reset(['player1_id', 'player2_id']);
        $this->getPlayersAllByGroup($id);
    }

    public function updateGame(): bool
    {
        if ($this->gameExistsYet($this->player1_id, $this->player2_id, $this->ronda)) {
            $this->addError('player1_id', 'Estos jugadores ya se enfrentaron en esta RONDA.');
            return false;
        }
        $this->validate();

        $game = Turnero::findOrFail($this->gameId);

        $game->update([
            'id_estatus'   => $this->estatus_id,
            'id_grupo'     => $this->grupo_id,
            'id_jugador_1' => $this->player1_id,
            'id_jugador_2' => $this->player2_id,
            'ronda_id'     => $this->ronda,
        ]);

        return true;
    }

    public function gameExistsYet($playerA, $playerB, $ronda): bool
    {
        return Turnero::where('ronda_id', $ronda)
            ->where(function ($query) use ($playerA, $playerB) {
                $query->where(function ($q) use ($playerA, $playerB) {
                    $q->where('id_jugador_1', $playerA)
                        ->where('id_jugador_2', $playerB);
                })
                    ->orWhere(function ($q) use ($playerA, $playerB) {
                        $q->where('id_jugador_1', $playerB)
                            ->where('id_jugador_2', $playerA);
                    });
            })
            ->exists();
    }

    public function storeGame(): bool
    {
        $this->validate();

        if ($this->gameExistsYet($this->player1_id, $this->player2_id, $this->ronda)) {
            $this->addError('player1_id', 'Estos jugadores ya se enfrentaron en esta RONDA.');
            return false;
        }

        DB::transaction(function () {

            $lastPosition = Turnero::where('id_tournament', $this->idtournament)
                ->whereNotNull('posicion_cola')
                ->lockForUpdate()
                ->max('posicion_cola');

            $nextPosition = $lastPosition ? $lastPosition + 1 : 1;

            Turnero::create([
                'id_grupo'       => $this->grupo_id,
                'id_estatus'     => EstatusTurner::ENCOLA,
                'id_jugador_1'   => $this->player1_id,
                'id_jugador_2'   => $this->player2_id,
                'id_tournament'  => $this->idtournament,
                'posicion_cola'  => $nextPosition,
                'ronda_id'       => $this->ronda,
            ]);
        });

        return true;
    }

    public function save()
    {
        $success = false;

        if ($this->modecurrent === 'edit') {
            $success = $this->updateGame();
        } else {
            $success = $this->storeGame();
        }

        if (!$success) {
            return;
        }

        $this->dispatch('gameUpdated');
        $this->dispatch('hide-edit-modal');
        session()->flash('message', 'Juego guardado correctamente.');
    }

    protected function rules()
    {
        switch ($this->modecurrent) {

            case 'create':

                $rules = [
                    'player1_id' => 'required|exists:players,id',
                    'player2_id' => 'required|exists:players,id|different:player1_id',
                    'ronda'      => 'required|integer|min:1',
                ];

                if ($this->ronda == 1) {
                    $rules['grupo_id'] = 'required|string|max:1';
                }

                return $rules;

            case 'edit':

                $rules = [
                    'player1_id' => 'required|exists:players,id',
                    'player2_id' => 'required|exists:players,id|different:player1_id',
                    'estatus_id' => 'required|exists:estatus_turner,id',
                    'ronda'      => 'required|integer|min:1',
                ];

                if ($this->ronda == 1) {
                    $rules['grupo_id'] = 'required|string|max:1';
                } else {
                    $rules['grupo_id'] = 'nullable|string|max:1';
                }

                return $rules;

            default:
                return [];
        }
    }

    protected function validationAttributes()
    {
        return [
            'player1_id' => 'Jugador 1',
            'player2_id' => 'Jugador 2',
            'grupo_id' => 'Grupo',
            'ronda' => 'Ronda',
        ];
    }

    public function render()
    {
        return view('livewire.edit-game-modal');
    }
}
