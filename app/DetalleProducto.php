<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = "detalle_productos";

    protected $primaryKey ="id_detalle"; 
    public $incrementing = true;
    protected $fillable =[
                        'id_producto', 
                        'id_provedor', 
                        'precio', 
                        'cantidad'
    ];
}
