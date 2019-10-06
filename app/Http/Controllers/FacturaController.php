<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        $facturas = \DB::table('facturas')
            ->join('carritos','facturas.id_carrito','carritos.id_carrito')
            ->join('clientes','carritos.id_cliente','clientes.id_cliente')
            ->join('tarjetas','clientes.numero_tarjeta','tarjetas.numero_tarjeta')
            ->select('facturas.*','carritos.id_cliente','clientes.numero_tarjeta','tarjetas.titular')
            ->get();
            
        return view('factura',['facturas' => $facturas]);
       
    }
    
    public function store(Request $request){ //Procesar la creacion de una factura
        return'Generando factura';
    }
}
