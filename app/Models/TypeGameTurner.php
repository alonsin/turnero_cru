<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeGameTurner extends Model
{
    protected $table = 'tipo_juego_turner'; 

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'nombre',
    ];

}
