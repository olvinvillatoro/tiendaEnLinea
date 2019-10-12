<?php

namespace App\Http\Controllers;
use App\Producto;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 /*   public function index()
    {
        $productos = Producto::inRandomOrder(2)->get();
        return view('welcome')->with('productos', $productos); 
    }
*/
    public function index()
    {
        
        $productos= Producto::select('productos.id','modelos.nombre_modelo',
                                    'detalle_productos.precio','productos.url_imagen',
                                    'productos.descripcion',
                                    'detalle_productos.cantidad')
                                    ->join('modelos', 'productos.id', '=', 'modelos.id_producto')
                               //    ->join('marcas','modelos.id_marca','=','marcas.id')
                                    ->join('detalle_productos','productos.id','=','detalle_productos.id_detalle')
                                    
        
        ->take(8)->inRandomOrder()->get();
      
      
       
        return view('welcome')->with('productos', $productos);
    }
}
