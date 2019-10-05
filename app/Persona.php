<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Persona extends Model
{
    protected $primaryKey ="id_persona";
    

    protected $fillable = [
        'id',
        'nombre_persona', 
        'apellido_persona',
        'correo_persona',
        'telefono_persona',
        'fechanac_persona',
    ];

}
