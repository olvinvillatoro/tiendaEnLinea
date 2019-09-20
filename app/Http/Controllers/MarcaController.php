<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'esta sera la vista de todos las marcas'
        $marcas=Marca::all();
       
        // se imprime toda la tabla de las marcas
        return $marcas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        
        */
    }


    public function Insertar(Request $request)
    {
        /*se isertaran datos a la tabla marcas*/
        $marcaNueva=new Marca;
  
        $marcaNueva->nombre_marca="iphone";
        $marcaNueva->save();
        echo "se agrego con exito a la base de datos el producto : ". $marcaNueva->nombre_marca;
    }

    
    public function detalle($id)
    {
        //'esta es la marca  con id:'.$id;
        $marca=Marca::findOrFail($id);
        echo $marca;
    }

  
    public function editar($id)
    {
        //'se edita la marca con id:'.$id;
        $marca = Marca::find($id);
        $marca->nombre_marca= 'nueva marca';
        $producto->save();

        return "se edito con exito la marca con id:".$id;
    }

   
    public function update(Request $request, Marca $marca)
    {
        //
    }


    public function eliminar($id)
    {
        //'se eliminara la marca con id:'.$id;
        $marca = Marca::find($id);
        $narca->delete();
        
        return "se elimino con exito la marca  con id:".$id;
    }
}
