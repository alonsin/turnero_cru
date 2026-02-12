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

    public $statusBadges = [
        'EN JUEGO'    => 'bg-success',
        'EN PAUSA'    => 'bg-warning text-dark',
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
            ->where('id_tipo_juego_turner', '<=', 11)
            ->get();

        $this->turneroEspera = (clone $baseQuery)
            ->where('id_tipo_juego_turner', '>', 11)
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
