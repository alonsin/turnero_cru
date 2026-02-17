<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\turnero;
use Livewire\Component;

class ShowDataTurnero extends Component
{

    public $turneroEncurso = [];

    public function mount()
    {
        $this->loadGamesTurner();
    }

    public function loadGamesTurner()
    {
        $baseQuery = turnero::with(
            'mesa',
            'tournament',
            'player1',
            'player2',
            'estatus'
        );
        $this->turneroEncurso = (clone $baseQuery)
            ->where('id_estatus', EstatusTurner::ENJUEGO)
            ->get();
    }


    public function render()
    {
        return view('livewire.show-data-turnero');
    }
}
