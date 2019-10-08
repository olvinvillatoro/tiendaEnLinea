<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarjeta;
use Illuminate\Support\Facades\Validator;

class TarjetaController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'numero_tarjeta' => ['required', 'string', 'max:16'],
            'titular' => ['required', 'string', 'max:255'],
            'ccv'=>['required', 'string', 'max:4'],
            'fecha_vencimiento' => ['required', 'date'],

        ]);
    }

    public function create(Request $data){
        $tarjeta= new Tarjeta;
        
        $tarjeta->numero_tarjeta=$data['numero_tarjeta'];
        $tarjeta->titular=$data['titular'];
        $tarjeta->ccv=$data['ccv'];
        $tarjeta->fecha_vencimiento=$data['fecha_vencimiento'];
        $tarjeta->save();

        return view('pages.tarjeta');// view('pages.tables',$tarjeta);

    }
    public function show($numero_tarjeta){
        return'tarjeta con numero ' .$numero_tarjeta;
    }
    public function edit(){
        return'edicion de tarjeta';

    }
    public function destroy(){
        return 'eliminar tarjeta';

    }
    public function vista(){
        return view('pages.tarjeta');
    }

}
