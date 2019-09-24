<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        $facturas= \DB::table('facturas')->select('id_factura','total','fecha')->get();
        //return view('factura.index',['facturas'=> $facturas]);
        //return view('facturas', compact('facturas'));
        return $facturas;
    }
    public function create(){
        return'creacion de una factura';
       

    }
    public function show($id_factura){ 
         //$facturas=Factura::whereFactura($id_factura)->first();
       
         return'mostrando factura con id: ' . $id_factura;

    }
    public function store(Request $request){ //Procesar la creacion de una factura
        return'Generando factura';
    }
}
