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
    public $modecurrent;

    #[On('endGame')]
    public function endGame($id, $mode)
    {   
        $this->resetDataForm();
        $this->resetValidation();
        $this->resetErrorBag();
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

        if ($mode === 'editfinished') {
            $this->numcaram_j1 = $game->carambolas_j1;
            $this->numcaram_j2 = $game->carambolas_j2;
            $this->entradas = $game->entradas;
        }
        $this->modecurrent = $mode;

        $this->dispatch('show-end-game-modal');
    }

    public function calcularPuntos($caramJ1, $caramJ2, $entradas)
    {
        $puntosJ1 = 0;
        $puntosJ2 = 0;

        // Si alguien llegó a 30 gana automáticamente
        if ($caramJ1 >= 30) {
            $puntosJ1 = 2;
        } elseif ($caramJ2 >= 30) {
            $puntosJ2 = 2;
        }

        // Si se acabaron las 35 entradas
        elseif ($entradas == 35) {

            if ($caramJ1 > $caramJ2) {
                $puntosJ1 = 2;
            } elseif ($caramJ2 > $caramJ1) {
                $puntosJ2 = 2;
            } else {
                $puntosJ1 = 1;
                $puntosJ2 = 1;
            }
        }

        return [$puntosJ1, $puntosJ2];
    }

    public function resetDataForm()
    {
        $this->reset([
            'numcaram_j1',
            'numcaram_j2',
            'entradas',
            'id_juego',
        ]);
    }

    public function save()
    {
        $this->validate();
        $game = turnero::where('id', $this->id_juego)->first();

        [$puntosJ1, $puntosJ2] = $this->calcularPuntos($this->numcaram_j1, $this->numcaram_j2, $this->entradas);

        $game->carambolas_j1 = $this->numcaram_j1;
        $game->carambolas_j2 = $this->numcaram_j2;
        $game->entradas = $this->entradas;
        $game->pts_j1     = $puntosJ1;
        $game->pts_j2     = $puntosJ2;
        $game->id_estatus = EstatusTurner::FINALIZADO;
        $game->id_mesa = NULL;
        $game->save();

        $this->resetDataForm();

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
