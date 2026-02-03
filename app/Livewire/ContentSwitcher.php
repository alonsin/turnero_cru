<?php

namespace App\Livewire;

use Livewire\Component; 

class ContentSwitcher extends Component
{
    public $section = 'juegos'; 

    public function showJuegos()
    {
        $this->section = 'juegos';
    }

    public function showJugadores()
    {
        $this->section = 'jugadores';
    }

    public function render()
    {
        return view('livewire.content-switcher');
    }
}