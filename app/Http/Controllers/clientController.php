<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class clientController extends Controller
{


   public function index(){
    $clientes=Cliente::all();
    dd($clientes);   
   // return 'todos los clients';

   }

   public function show($cliente){
    $clientes=Cliente::whereCliente($cliente)
                        ->first(); 
    if ($clientes) {
        dd($clientes);
    }  
    else {
        
        return 'cliente no existe';
    }
    // return 'un cliente '.$user;
   }


}
