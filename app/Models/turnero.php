<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class turnero extends Model
{
    protected $table = 'tourner_data';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id_tournament',
        'id_mesa',
        'id_grupo',
        'tiempo_total_de_juego',
        'id_jugador_1',
        'id_jugador_2',
        'id_tipo_juego_turner',
        'id_estatus'
    ];


    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'id_mesa', 'id');
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'id_tournament', 'id');
    }




}
