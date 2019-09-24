<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipoUsuarioController extends Controller
{
    public function index(){
        $tipos_usuarios= \DB::table('tipo_usuarios')->select('id_tipo_usuario','nombre_tipo_usuario')->get();
        return $tipos_usuarios;
    }
    public function create($id_tipo_usuario){
        return'mostrando usuario con tipo: ' .$id_tipo_usuario;
    }
}
