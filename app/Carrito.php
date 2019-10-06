<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table= "carritos";

    protected $primaryKey ="id_carrito";
    public $incrementing = true;

    public $timestamps=true;

    protected $fillable = [
                        'id_carrito',
                        'id_cliente',
                        'fecha'
    ];
}
