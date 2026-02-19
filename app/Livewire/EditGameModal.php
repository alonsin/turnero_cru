<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\Player;
use App\Models\Rondas;
use App\Models\turnero;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On;

class EditGameModal extends Component
{
    public $game, $gameId, $player1, $player2, $mesa, $estatus, $playersAll, $estatusall;
    public $estatus_id, $grupo_id, $player1_id, $player2_id, $ronda;
    public $grupos = [];
    public $rondas = [];
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
        $this->getplayersAll();
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
        $this->modecurrent = $mode;

        if ($mode === 'edit' && $id) {
            $game = turnero::with([
                'player1',
                'player2',
                'mesa',
                'ronda',
                'estatus'
            ])->findOrFail($id);

            $this->gameId    = $game->id;
            $this->player1   = $game->player1;
            $this->player2   = $game->player2;
            $this->mesa   = $game->mesa->name ?? 'Sin mesa / En espera';
            $this->estatus = $game->estatus;
            $this->estatus_id = $game->estatus->id;
            $this->grupo_id = $game->id_grupo;
            $this->player1_id = $game->id_jugador_1;
            $this->player2_id = $game->id_jugador_2;
            $this->ronda = $game->ronda->id;

            $this->esRondaGrupos = $game->ronda->id == Rondas::GRUPOS;

        } else {
            //  dd("aqui esta lleghando ");
            $this->reset([
                'gameId',
                'player1',
                'player2',
                'mesa',
                'estatus',
                'estatus_id',
                'grupo_id',
                'ronda',
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
            $this->grupo_id = null; // limpiamos grupo si no aplica
        }
    }

    public function updateGame()
    {
        $this->validate();
        $game = turnero::findOrFail($this->gameId);

        $game->update([
            'id_estatus'   => $this->estatus_id,
            'id_grupo'     => $this->grupo_id,
            'id_jugador_1' => $this->player1_id,
            'id_jugador_2' => $this->player2_id,
            'ronda_id' => $this->ronda,
        ]);
    }

    public function storeGame()
    {
        $this->validate();
        DB::transaction(function () {

            $lastPosition = turnero::where('id_tournament', $this->idtournament)
                ->whereNotNull('posicion_cola')
                ->lockForUpdate()
                ->max('posicion_cola');

            $nextPosition = $lastPosition ? $lastPosition + 1 : 1;

            turnero::create([
                'id_grupo'       => $this->grupo_id,
                'id_estatus'     => EstatusTurner::ENCOLA,
                'id_jugador_1'   => $this->player1_id,
                'id_jugador_2'   => $this->player2_id,
                'id_tournament'  => $this->idtournament,
                'posicion_cola'  => $nextPosition,
                'ronda_id'  => $this->ronda,
            ]);
        });
    }

    public function save()
    {

        if ($this->modecurrent === 'edit') {
            $this->updateGame();
        } else {
            $this->storeGame();
        }

        $this->dispatch('gameUpdated'); // Puedes escuchar esto en tu vista principal para refrescar la tabla
        $this->dispatch('hide-edit-modal'); // Evento para cerrar el modal vía JS
        session()->flash('message', 'Juego actualizado correctamente.');
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
