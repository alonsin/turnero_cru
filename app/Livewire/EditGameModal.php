<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\Player;
use App\Models\turnero;
use Livewire\Component;
use Livewire\Attributes\On;

class EditGameModal extends Component
{
    public $game, $gameId, $player1, $player2, $mesa, $estatus, $typeGameTurner, $playersAll, $estatusall;
    public $estatus_id, $grupo_id, $player1_id, $player2_id;
    public $grupos = [];

    public function mount()
    {
        foreach (range('A', 'P') as $letter) {
            $this->grupos[$letter] = "Grupo $letter";
        }
        $this->getStatusAll();
        $this->getplayersAll();
    }

    public function getStatusAll()
    {
        $this->estatusall = EstatusTurner::all();
    }
    public function getplayersAll()
    {
        $this->playersAll = Player::all();
    }

    #[On('openEditGameModal')]
    public function loadGame($id)
    {
        $game = turnero::with([
            'player1',
            'player2',
            'mesa',
            'TypeGameTurner',
            'estatus'
        ])->findOrFail($id);


        $this->gameId    = $game->id;
        $this->player1   = $game->player1;
        $this->player2   = $game->player2;
        $this->mesa   = $game->mesa;
        $this->estatus = $game->estatus;
        $this->typeGameTurner = $game->typeGameTurner->nombre;
        $this->estatus_id = $game->estatus->id;
        $this->grupo_id = $game->id_grupo;
        $this->player1_id = $game->id_jugador_1;
        $this->player2_id = $game->id_jugador_2;

        $this->dispatch('show-edit-modal');
    }

    public function save()
    {
        $validated = $this->validate([
            'estatus_id' => 'required|exists:estatus_turner,id',
            'grupo_id'   => 'nullable|string|max:1',
            'player1_id' => 'required|exists:players,id',
            'player2_id' => 'nullable|exists:players,id|different:player1_id',
        ]);
        $game = turnero::findOrFail($this->gameId);

        $game->update([
            'id_estatus'   => $this->estatus_id,
            'id_grupo'     => $this->grupo_id,
            'id_jugador_1' => $this->player1_id,
            'id_jugador_2' => $this->player2_id,
        ]);
        $this->dispatch('gameUpdated'); // Puedes escuchar esto en tu vista principal para refrescar la tabla
        $this->dispatch('hide-edit-modal'); // Evento para cerrar el modal vía JS
        session()->flash('message', 'Juego actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.edit-game-modal');
    }
}
