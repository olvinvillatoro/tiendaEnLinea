<?php

namespace App\Http\Controllers;
use App\Producto;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('search')->with('productos',null);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //metodo para realizar la busqueda de productos y redirigir a la pagina de busqueda
    public function buscar(Request $buscar){
     //  dd($buscar);
     if($buscar!=null){

       $data = $buscar->buscar;
     
      
       $productos= Producto::select('productos.id','productos.descripcion','productos.url_imagen', 'modelos.nombre_modelo','marcas.nombre_marca','detalle_productos.precio')
       ->join('modelos', 'productos.id', '=', 'modelos.id')
                                    ->join('marcas','modelos.id','=','marcas.id')
                                    ->join('detalle_productos','productos.id','=','detalle_productos.id_detalle')
       
       ->Where('modelos.nombre_modelo', 'like', '%'.$data.'%')
       ->orWhere('marcas.nombre_marca', 'like', '%' . $data . '%')
       ->orWhere('productos.descripcion', 'like', '%' . $data . '%')
       ->get();

       if($productos==null){
           return view('search')->with('productos', null);
       }
       else
       return view('search')->with('productos', $productos);

       }

       else{
        
        return view('search')->with('productos', null);    }
     }
     

}
