<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayersTournament extends Model
{
    protected $table = 'players_tournament';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_player',
        'id_tournament',
        'grupo',
        'avanza',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'id_player', 'id');
    }
}
