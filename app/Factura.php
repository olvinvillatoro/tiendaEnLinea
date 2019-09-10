<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "FACTURAS";

    protected $primaryKey ="id_factura"; // Llave primaria de la FACTURAS
    public $incrementing = false;//el id de esta tabla no es autoincrementable


    public $timestamps=false; //Prop. para agregar columnas de creacion y actualizacion de registro, en false no crea esa columna en la BD

    protected $fillable =[
                        //'id_carrito', 
                        'total',
                        'fecha'
    ];
}
