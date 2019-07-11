<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\usuario;
use App\Country;

class registroController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
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
    public function store(\App\Http\Requests\RegisterUserRequest $data)
    {

      
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




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\usuario $usuarios)
    {
      $usuarios= usuario::all();
      return view('showUsuarios', ['usuarios'=>$usuarios]);
    }

    public function detalleUsuario(\App\usuario $usuarios)
    {
      $usuarios= usuario::all();
      //$usuario= usuario::find($usuario);
      return view('detalleUsuario', ['usuarios'=>$usuarios]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\usuario $usuario)
    {
      $usuario= usuario::find($usuario);
      return view('editUsuario',['usuario'=>$usuario]);
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
    public function destroy(\App\usuario $id)
    {
        $usuario= usuario::find($id);
        $usuario->delete();
        return view('borrarUsuario', ['usuario'=>$usuario]);
    }


}
