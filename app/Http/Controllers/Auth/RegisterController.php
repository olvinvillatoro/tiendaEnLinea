<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Persona;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'name' => ['required', 'string', 'max:255'],
            'apellido_persona' => ['required', 'string', 'max:255'],
            'id'=>['string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono_persona' => ['required',  'string', 'max:255'],
            'fechanac_persona' => ['required', 'date'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $usuario= new User;
        $person = new Persona;

        $usuario->name=$data['name'];
        $usuario->id_tipo_usuario=1;
        $usuario->email= $data['email'];
        $usuario->password= Hash::make($data['password']);

        //id del ultimo usuario igresado
        $usuario->save();

        $idultimo=$usuario['id'];


        $person->id=$idultimo;
        $person->nombre_persona=$data['name'];
        $person->apellido_persona=$data['apellido_persona'];
        $person->correo_persona=$data['email'];
        $person->telefono_persona=$data['telefono_persona'];
        $person->fechanac_persona=$data['fechanac_persona'];
        $person->save();
        
        return $usuario;/*( 
            User::create([
            
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]) &&
        Persona::create([
            'id'=>'1',
            'nombre_persona'=>$data['name'],
            'apellido_persona' =>$data['apellido_persona'],
            'correo_persona'=>$data['email'],
            'telefono_persona'=>$data['telefono_persona'],
            'fechanac_persona'=>$data['fechanac_persona'],
            
            ])
    );*/
    }
}
