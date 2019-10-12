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
        $producto=[
            "id"=>"",
            "nombre_modelo"=>"",
            "nombre_marca"=>"",
            "precio"=>"",
            "url_imagen"=>"",
            "descripcion"=>"",
            "cantidad"=>""


        ];

        $marca = Marca::select('id')->where('nombre_marca', $data->marca)->first();
        
       if ($marca->save()) {
                  
                $productos->id_modelo=1;
                $productos->descripcion= $data['descripcion'];
                $productos->url_imagen=$data['url_imagen']->store('uploads', 'public');
                
            
                if ($productos->save()) {
                
                    $modelo->id_marca=$marca['id'];
                    $modelo->id_producto=$productos['id'];

                    $modelo->nombre_modelo=$data['nombre_modelo'];
                    
                    if($modelo->save()){
                        $detalle->id_producto=$productos['id'];
                        $detalle->id_proveedor=1;
                        $detalle->precio=$data['precio'];
                        $detalle->cantidad=$data['cantidad'];
                        $detalle->save();
                        
                        $producto['id']=$modelo->$productos['id'];
                        $producto['nombre']=$modelo->nombre_modelo;
                        $producto['marca']=$data->marca;
                        $producto['precio']=$detalle->precio;
                        $producto['url_imagen']=$productos->url_imagen;
                        $producto['descripcion']=$productos->descripcion;
                        $producto['disponible']=$detalle->cantidad;
                        
                        
                        return view('producto')->with('producto', $producto);
                    }
               
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
       

        $productos= Producto::select('productos.id','modelos.nombre_modelo','marcas.nombre_marca',
                                    'detalle_productos.precio','productos.url_imagen',
                                    'productos.descripcion',
                                    'detalle_productos.cantidad')
                                    ->join('modelos', 'productos.id', '=', 'modelos.id_producto')
                                    ->join('marcas','modelos.id_marca','=','marcas.id')
                                    ->join('detalle_productos','productos.id','=','detalle_productos.id_producto')
                                    ->Where('productos.id', '=', $id)
        
        ->first();
     

       
        return view('producto')->with('producto', $productos);
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
