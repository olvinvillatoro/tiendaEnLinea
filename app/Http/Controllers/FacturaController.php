<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Producto;
use App\Marca;
use App\Carrito;
use App\DetalleProducto;
use App\DetalleCarrito;
class FacturaController extends Controller
{
    public function index(){
    
    return view('factura');
    }

    public function store(){
       $detCarrito= new DetalleCarrito;
        $producto=new Producto;
        $detalle;
        $carrito=new Carrito;
        $productos=Cart::content();
        foreach ($productos as $producto) {
           $detalle= DetalleProducto::select('id_detalle')->where('id_producto', $producto->id)->first();
           
           $detCarrito->idCarrito=1;
           $detCarrito->idDetalleProducto=$detalle->id_detalle;
           $detCarrito->cantProducto=1;
           $detCarrito->save();
           Cart::instance('default')->destroy();
            return redirect('/');
            

       }
    }
}
