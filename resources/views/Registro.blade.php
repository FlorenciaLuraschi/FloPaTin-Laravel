@extends('layouts.vistaGenerica')

@section('titulo', 'Proyecto FloPaTin-Registración')

@section('page-class', 'contener-fluid body_registro p-0')

@section('content')

      <form class="formulario1" action="{{url('/register')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2>Registrate en nuestra comunidad para jugar</h2>
        <!-- <label for="nombre" class="label1">Nombre</label>
          <input type="text" name="nombre" value="" class="field">

          <label for="apellido" class="label1">Apellido</label>
          <input type="text" name="apellido" value="" class="field"> -->

          <label for="name" class="label1">Nombre de Usuario</label>
          <input type="text" name="name" class="field" value="{{old('name')}}">

          @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label for="email" class="label1">Correo de referencia</label>
          <input type="email" name="email" value="{{old('email')}}" class="field">

          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label for="password" class="label1">Contraseña</label>
          <input type="password" name="password" value="" class="field">
          <small id="passwordHelpInline" class="text-muted smallpass">
            Utiliza 8 caracteres como mínimo combinando letras y números.
          </small>

          @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <label for="password_confirmation" class="label1">Reconfirmación de la contraseña</label>
          <input type="password" name="password_confirmation" value="" class="field">

          @error('password_confirmation')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group">
            <label>Seleccione su país</label>
            <br>
             <select name="country_id">
              <!-- <option hidden value="">Seleccione su país</option> -->
             @foreach($countries as $country)
              <option value="{{ $country->id }}">
                  {{ $country->name }}
              </option>
             @endforeach
             </select>
          </div>

          <br>
          <div class="archivo">
              Archivo: <input type="file" name="avatar" id="avatar" value="">
          </div>
          @error('avatar')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <br>
          <button type="submit" class="bottonacceder">Registrarme</button>
          </form>

@endsection
