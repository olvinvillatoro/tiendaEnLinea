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
        return view('welcome');
    }
}
