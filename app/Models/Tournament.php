<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournament'; 

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'name_tournament',
    ];

}
