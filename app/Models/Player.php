<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players'; 

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'name_player',
    ];

}
