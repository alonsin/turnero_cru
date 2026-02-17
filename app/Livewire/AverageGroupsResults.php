<?php

namespace App\Livewire;

use App\Models\EstatusTurner;
use App\Models\turnero;
use Livewire\Component;

class AverageGroupsResults extends Component
{
    public $section = 'juegos';

    public function obtenerTablaPorGrupo($grupo)
    {
        $partidos = turnero::where('id_grupo', $grupo)
            ->where('id_estatus', EstatusTurner::FINALIZADO)
            ->get();

        $tabla = [];

        foreach ($partidos as $p) {

            // Jugador 1
            if (!isset($tabla[$p->id_jugador_1])) {
                $tabla[$p->id_jugador_1] = [
                    'jugador' => $p->player1->name_player,
                    'cf' => 0,
                    'cc' => 0,
                    'entradas' => 0,
                    'jj' => 0,
                    'promedio' => 0,
                    'pts' => 0,
                ];
            }

            $tabla[$p->id_jugador_1]['cf'] += $p->carambolas_j1;
            $tabla[$p->id_jugador_1]['cc'] += $p->carambolas_j2;
            $tabla[$p->id_jugador_1]['entradas'] += $p->entradas;
            $tabla[$p->id_jugador_1]['jj'] += 1;
            $tabla[$p->id_jugador_1]['pts'] += $p->pts_j1;
            $tabla[$p->id_jugador_1]['promedio'] = $tabla[$p->id_jugador_1]['entradas'] > 0
                ? number_format($tabla[$p->id_jugador_1]['cf'] / $tabla[$p->id_jugador_1]['entradas'], 3, '.', '')
                : number_format(0, 3, '.', '');

            // Jugador 2
            if (!isset($tabla[$p->id_jugador_2])) {
                $tabla[$p->id_jugador_2] = [
                    'jugador' => $p->player2->name_player,
                    'cf' => 0,
                    'cc' => 0,
                    'entradas' => 0,
                    'jj' => 0,
                    'promedio' => 0,
                    'pts' => 0,
                ];
            }

            $tabla[$p->id_jugador_2]['cf'] += $p->carambolas_j2;
            $tabla[$p->id_jugador_2]['cc'] += $p->carambolas_j1;
            $tabla[$p->id_jugador_2]['entradas'] += $p->entradas;
            $tabla[$p->id_jugador_2]['jj'] += 1;
            $tabla[$p->id_jugador_2]['pts'] += $p->pts_j2;
            $tabla[$p->id_jugador_2]['promedio'] = $tabla[$p->id_jugador_2]['entradas'] > 0
                ? number_format($tabla[$p->id_jugador_2]['cf'] / $tabla[$p->id_jugador_2]['entradas'], 3, '.', '')
                : number_format(0, 3, '.', '');
        }

        // 🔹 Ordenamos por PTS DESC y luego PROM DESC
        $tabla_ordenada = array_values($tabla);
        usort($tabla_ordenada, function ($a, $b) {
            if ($b['pts'] === $a['pts']) {
                return $b['promedio'] <=> $a['promedio'];
            }
            return $b['pts'] <=> $a['pts'];
        });

        return $tabla_ordenada;
    }



    public function render()
    {
        $grupos = turnero::select('id_grupo')
            ->distinct()
            ->OrderBy('id_grupo', 'asc')
            ->pluck('id_grupo');

        $tablas = [];

        foreach ($grupos as $grupo) {
            $tablas[$grupo] = $this->obtenerTablaPorGrupo($grupo);
        }


        return view('livewire.average-groups-results', compact('tablas'));
    }
}
