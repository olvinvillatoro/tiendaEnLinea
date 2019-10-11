<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarritoController extends Controller
{
    public function show(){
 
        //$carritos= \DB::table('carritos')->select('id_carrito','id_cliente','fecha')->get();
       $carritos =\DB::table('carritos')
       //->join('detallexcarrito','carritos.id_carrito','detallexcarrito.id_carrito')
       //->join('detalle_x_productos','detalle_x_productos_has_carritos.id_detalle_x_producto','detalle_x_productos.id_detalle_x_producto')
       //->join('productos','detalle_x_productos.id_producto','productos.id_producto')
       //->select('productos.url_imagen','productos.descripcion','detalle_x_productos.precio','detalle_x_productos_has_carritos.cantProducto','carritos.id_cliente')
       
       ->get();
        return view('carrito',['carritos'=> $carritos]);

    } 

    public function comprar($id){
        return 'Detalles de compra , el id de su compra es :' . $id;

    }
    public function agregarCarrito($producto){

    }
}
