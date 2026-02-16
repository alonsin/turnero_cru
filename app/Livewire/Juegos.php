<?php

namespace App\Livewire;

use App\Models\turnero;
use Livewire\Component;
use Livewire\Attributes\On;

class Juegos extends Component
{

    public $message = 'Bienvenido a la sección de Juegos';
    public $turneroMesas = [];
    public $turneroEspera = [];
    public $activeTab = 'juegos';
    public $mesa, $player1name, $player2name, $grupo_id;

    public $statusBadges = [
        'EN JUEGO'    => 'bg-success',
        'EN COLA'    => 'bg-warning text-dark',
        'TERMINADO'   => 'bg-secondary',
        'FINALIZADO'  => 'bg-danger',
        'EN ESPERA'   => 'bg-info text-dark',
    ];

    public function mount()
    {
        $this->loadGames();
    }

    public function loadGames()
    {
        $baseQuery = turnero::with(
            'mesa',
            'tournament',
            'player1',
            'player2',
            'estatus'
        );
        $this->turneroMesas = (clone $baseQuery)
            ->whereNotNull('id_mesa')
            ->where('id_mesa', '!=', 0)
            ->orderBy('id_mesa', 'asc')
            ->get();

        $this->turneroEspera = (clone $baseQuery)
            ->where('posicion_cola', '<>', NULL)
            ->get();
    }

    #[On('gameUpdated')]
    public function refreshTable()
    {
        $this->loadGames();
    }

    public function render()
    {
        return view('livewire.sections.juegos');
    }
}
