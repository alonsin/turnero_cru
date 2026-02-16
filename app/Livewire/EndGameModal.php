<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\Mesa;
use App\Models\turnero;
use Livewire\Component;
use Livewire\Attributes\On;

class EndGameModal extends Component
{
    public $mesa, $player1name, $player2name, $grupo_id;
    public $hayMesasDisponibles = false;
    public $mesasDisponibles;
    public $numcaram_j1, $numcaram_j2, $entradas;
    public $id_juego;

    #[On('endGame')]
    public function endGame($id)
    {
        $this->id_juego = $id;
        $game = turnero::with([
            'player1',
            'player2',
            'mesa',
            'estatus'
        ])->findOrFail($id);
        $this->grupo_id = $game->id_grupo;
        $this->player1name   = $game->player1->name_player ?? 'Sin jugador asignado';
        $this->player2name   = $game->player2->name_player ?? 'Sin jugador asignado';
        $this->dispatch('show-end-game-modal');
    }

    public function save()
    {
        $this->validate();
        $game = turnero::where('id', $this->id_juego)->first();
        $game->carambolas_j1 = $this->numcaram_j1;
        $game->carambolas_j2 = $this->numcaram_j2;
        $game->entradas = $this->entradas;
        $game->id_estatus = EstatusTurner::FINALIZADO;
        $game->id_mesa = NULL;
        $game->save();

        $this->reset([
            'numcaram_j1',
            'numcaram_j2',
            'entradas',
            'id_juego',
        ]);

        $this->dispatch('hide-end-game-modal');
        $this->dispatch('gameUpdated');
    }

    protected function rules()
    {
        return [
            'numcaram_j1' => 'required|int|max:30',
            'numcaram_j2' => 'required|int|max:30',
            'entradas'   => 'required|int|max:35',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'numcaram_j1' => 'Car 1',
            'numcaram_j2' => 'Car 2',
            'entradas' => 'Entradas',
        ];
    }


    public function render()
    {
        return view('livewire.end-game-modal');
    }
}
