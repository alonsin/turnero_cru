<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rondas extends Model
{
    protected $table = 'ronda_tournament'; 

    protected $primaryKey = 'id'; 

    public $timestamps = false;

    protected $fillable = [
        'nombre_ronda'
    ];

    const GRUPOS = 1;

}
