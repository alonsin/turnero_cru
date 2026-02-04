<?php

namespace App\Livewire;

use App\Models\turnero;
use Livewire\Component;

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


    public function render()
    {
        return view('livewire.sections.juegos');
    }
}
