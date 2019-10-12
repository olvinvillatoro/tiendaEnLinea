<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CarritoController extends Controller
{
    public function show(){
 
       $carritos =\DB::table('carritos')
       
       ->get();
        return view('carrito',['carritos'=> $carritos]);

    } 

    public function comprar($id){
        return 'Detalles de compra , el id de su compra es :' . $id;

    }
    public function store(Request $request){

        $duplicados=Cart::search(function($cartItem,$rowId) use ($request){
            return $cartItem->id===$request->id;

        });

        if ($duplicados->isNotEmpty()) {
            return redirect()->route('carrito')->with('success_message','Ya existe en el carrito');
        }
        Cart::add($request->id, $request->nombre,1,$request->precio)
            ->associate('App\Producto');

        return redirect()->route('carrito')->With('success_message','Articulo Agregado al carrito');

    }

    public function destroy($id){

        Cart::remove($id);
        return back();
    }
}
