<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TarjetaController extends Controller
{
    public function create(){
        return'creacion de una tarjeta';

    }
    public function show($numero_tarjeta){
        return'tarjeta con numero ' .$numero_tarjeta;
    }
    public function edit(){
        return'edicion de tarjeta';

    }
    public function destroy(){
        return 'eliminar tarjeta';

    }

}
