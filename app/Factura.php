<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "facturas";

    protected $primaryKey ="id_factura"; // Llave primaria de la FACTURAS
    public $incrementing = true;


    public $timestamps=false; //Prop. para agregar columnas de creacion y actualizacion de registro, en false no crea esa columna en la BD

    protected $fillable =[
                        'id_carrito', 
                        'total',
                        'fecha'
    ];
}
