<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Modelo;
use App\Marca;
use App\DetalleProducto;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('producto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        $productos=new Producto;
        $modelo= new Modelo;
        $marca = new Marca;
        $detalle= new DetalleProducto;

        $marca = Marca::select('id')->where('nombre_marca', $data->marca)->first();
        
       if ($marca->save()) {
                  
                $productos->id_modelo=1;
                $productos->descripcion= $data['descripcion'];
                $productos->url_imagen=$data['url_imagen']->store('uploads', 'public');
                
            
                if ($productos->save()) {
                
                    $modelo->id_marca=$marca['id'];
                    $modelo->id_producto=$productos['id'];

                    $modelo->nombre_modelo=$data['nombre_modelo'];
                    $modelo->save();
                return view('producto')->with('productos', $productos);
                } 
                

        }  
        else{
            return view('tables');
        }
        



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos= Producto::select('*')->where('id', $id)->first();

       
        return view('producto')->with('productos', $productos);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function vista(){
        return view('pages.registroProducto');
    }

}
