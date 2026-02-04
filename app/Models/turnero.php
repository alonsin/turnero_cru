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

    public function TypeGameTurner() 
    {
        return $this->belongsTo(TypeGameTurner::class, 'id_tipo_juego_turner', 'id');
    }

    public function player1() 
    {
        return $this->belongsTo(Player::class, 'id_jugador_1', 'id');
    }

    public function player2() 
    {
        return $this->belongsTo(Player::class, 'id_jugador_2', 'id');
    }

    public function estatus() 
    {
        return $this->belongsTo(EstatusTurner::class, 'id_estatus', 'id');
    }
}
