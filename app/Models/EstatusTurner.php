<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstatusTurner extends Model
{
    protected $table = 'estatus_turner'; 

    protected $primaryKey = 'id'; 

    public $timestamps = false;

    protected $fillable = [
        'name_estatus'
    ];

}
