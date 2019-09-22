<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        //$facturas=Factura::all();

    }
    public function create(){
        //return view('facturas/create');

    }
    public function show(/*$factura*/){ //Mostrar la factura

    }
    public function store(){ //Procesar la creacion de una factura
        return 'Creando una Factura';
    }
}
