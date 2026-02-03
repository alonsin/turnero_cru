<?php

namespace App\Livewire;

use App\Models\turnero;
use Livewire\Component; 

class Juegos extends Component
{

    public $message = 'Bienvenido a la sección de Juegos';
    public $turnero = [];

    public function mount()
    {
        $this->turnero = turnero::with('mesa','tournament')->get();
    }


    public function render()
    {
        return view('livewire.sections.juegos');
    }
}