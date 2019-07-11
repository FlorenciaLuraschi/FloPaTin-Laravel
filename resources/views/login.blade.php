@extends('layouts.vistaGenerica')

@section('titulo', 'Proyecto FloPaTin-Login')

@section('page-class', 'container-fluid p-0 body_login')

@section('content')
@include('partials.carousel')
        <form class="formlogin" action="" method="post">
          {{csrf_field()}}
          <h2>Log in</h2>
          <label for="email" class="label1">Correo electrónico</label><br>
          <input type="email" name="email" value="{{ old('email') }}" class="field" placeholder="ejemplo@dominio.com" required><br>
           @if(isset($errors->email))
            <span class="error_login">
             {{$errors->email}}
            </span>
           @endif
          <br>
          <label for="password" class="label1">Contraseña</label><br>
          <input type="password" name="password" value="" class="field" required><br>
          @if(isset($errors->password))
            <span class="error_login">
              {{$errores->password}}
            </span>
          @endif
          <br><br>
          <div class="col-auto my-1">
            <div class="form-check">
              <input class="form-check-input" name="recordar" type="checkbox" id="recordarme" value="recordar">
              <label class="form-check-label label1" for="recordar">
                Recordame
              </label>
            </div>
          </div>
          <div class="olvidoPassword">
              <label for="olvido-su-contrasenia">
                <a href="formolvidarcontrasenia.php">¿Ólvido su contraseña?</a>
              </label>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="bottonacceder">Iniciar sesión</button>
          </div>
            <ul class="listadeRegistro">
              <li class="Registrese"><a href="formularioDeRegistracion.php">¿Todavía no estás registrados?</a></li>
            </ul>
      </form>
      </div>
@endsection
