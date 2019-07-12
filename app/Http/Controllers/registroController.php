<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\usuario;
use App\Country;
use App\User;

class registroController extends Controller
{

    public function index()
    {
      $usuarios=usuario::all();
      return view("usuario.listadoUsuarios", ["usuarios"=>$usuarios]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()        //Muestro el formulario, creo al usuario
    {
      $countries= \App\Country::all();
      return view('Registro', ['countries'=> $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\RegisterUserRequest $data) // \App\Http\Requests\RegisterUserRequest->aqui estan las reglas de validacion.
    {         //con esta función guardo al usuario creado en la BD


        //para guardar el avatar primero generamos una variable vacia
        $nombreArchivo = '';
        //pregunta al formulario si tiene un avatar. Si lo tiene, toma la ruta del storage public
        //y lo guarda en el nombre del archivo
        if(request()->has('avatar')) {
          $nombreArchivo = request('avatar')->storePublicly('avatars');
        }
        $nuevoUsuario = new usuario();
        $nuevoUsuario->name= $data['name'];
        $nuevoUsuario->email= $data['email'];
        $nuevoUsuario->password= Hash::make($data['password']);
        $nuevoUsuario->avatar= $nombreArchivo;
        $nuevoUsuario->role=1;
        $nuevoUsuario->country_id=$data['country_id'];
        $nuevoUsuario->save();
        return redirect('/login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\usuario $usuarios) //REVISAR
    {
      $usuarios= usuario::all();
      return view('usuario.detalleUsuario', ['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\usuario $usuario) //Aquí edito al usuario
    {
      return view('usuario.editUsuario',['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario) //Aquí actualizo en BD la info editada
    {
      $usuario->update([
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
        'password'=>Hash::make($request->get('password')),
        'avatar'=>$request->get('avatar'),
        'role'=>$request->get('role'),
        'country_id'=>$request->get('country_id'),
      ]);
      return redirect("/listadoUsuarios"); //  CHEQUEAR
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\usuario $usuario)
    {
        $usuario->delete();
        return redirect('/listadoUsuarios'); //CHEQUEAR
    }


}
