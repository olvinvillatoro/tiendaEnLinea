<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = "tarjetas";

    protected $primaryKey ="numero_tarjeta"; //Llave primaria de la TARJETAS
    public $incrementing=false; //el id de esta tabla no es autoincrementable

    //Para esta Tabla creo seria necesario que se cree esa columna, por el momento solo se declara 
    public $timestamps=false; //Prop. para agregar columnas de creacion y actualizacion de registro, en false no crea esa columna en la BD

    protected $fillable =[
                         'nombre',
                         'apellido',
                         'fecha_vencimiento'
                        
    ];
}
