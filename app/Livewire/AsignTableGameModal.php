<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\Mesa;
use App\Models\turnero;
use Livewire\Component;
use Livewire\Attributes\On;

class AsignTableGameModal extends Component
{
    public $mesaid, $player1name, $player2name, $grupo_id;
    public $hayMesasDisponibles = false;
    public $mesasDisponibles;
    public $id_juego;

    #[On('openAssingTable')]
    public function loadGame($id)
    {
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset([
            'mesaid'
        ]);
        $this->id_juego = $id;
        $this->getMesasDisponibles();
        $game = turnero::with([
            'player1',
            'player2',
            'mesa',
            'estatus'
        ])->findOrFail($id);
        $this->grupo_id = $game->id_grupo;
        $this->player1name   = $game->player1->name_player ?? 'Sin jugador asignado';
        $this->player2name   = $game->player2->name_player ?? 'Sin jugador asignado';
        $this->dispatch('show-asign-table-modal');
    }

    public function getMesasDisponibles()
    {
        $this->mesasDisponibles = Mesa::whereNotIn('id', function ($query) {
            $query->select('id_mesa')
                ->from('tourner_data')
                ->where('id_estatus', EstatusTurner::ENJUEGO)
                ->whereNotNull('id_mesa');
        })->get();

        $this->hayMesasDisponibles = $this->mesasDisponibles->isNotEmpty();
    }

    public function save()
    {
        $this->validate();
        $game = turnero::where('id', $this->id_juego)->first();
        $game->id_estatus = EstatusTurner::ENJUEGO;
        $game->id_mesa = $this->mesaid;
        $game->posicion_cola = null;
        $game->save();

        $this->dispatch('hide-asign-game-modal');
        $this->dispatch('gameUpdated');
    }

    protected function rules()
    {
        return [
            'mesaid' => 'required|integer|exists:mesa,id',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'mesaid' => 'Mesa',
        ];
    }


    public function render()
    {
        return view('livewire.asign-table-game-modal');
    }
}
