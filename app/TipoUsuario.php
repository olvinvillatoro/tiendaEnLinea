<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "tipo_usuarios";

    protected $primaryKey ="id_tipo_usuario"; // Llave primaria de la TIPO_USUARIOS
    public $incrementing = false;//el id de esta tabla no es autoincrementable


    //Para esta Tabla creo seria necesario que se cree esa columna, por el momento solo se declara 
    public $timestamps=false; //Prop. para agregar columnas de creacion y actualizacion de registro, en false no crea esa columna en la BD

    protected $fillable =[
                        
                        'nombre_tipo_usuario'
    ];
}
