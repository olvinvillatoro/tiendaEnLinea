<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class providerController extends Controller
{
    
    public function index(){
        $proveedores=Proveedor::all();
        dd($proveedores); 
    }

    public function show($proveedor){
        $proveedores= Proveedor::whereProveedor($proveedor)
                        ->first();
        
        if ($proveedores) 
            dd($proveedores);
           
         else 
           return 'no existe proveedor';
    }
}
