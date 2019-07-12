@extends('layouts.vistaGenerica')

@section('titulo', 'Proyecto FloPaTin-Login')

@section('page-class', 'container-fluid p-0 body_login')

@section('content')
@include('partials.carousel')
        <form class="formlogin" action="" method="post">
          {{csrf_field()}}
          <h2>Log in</h2>
          <label for="email" class="label1">Correo electrónico</label><br>
          <input type="email" name="email" value="{{ old('email') }}" class="field" placeholder="ejemplo@dominio.com" required autocomplete="email" autofocus><br>
        @error('email')
           <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
           </span>
        @enderror
          <br>
          <label for="password" class="label1">Contraseña</label><br>
          <input type="password" name="password" value="" class="field" required><br>
          @error('password')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
             </span>
          @enderror
          <br>
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
                 <a href="formolvidarcontrasenia.php">¿Ólvido su contraseña?</a> <!-- Todavia no funciona -->
              </label>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="bottonacceder">Iniciar sesión</button>
          </div>
            <ul class="listadeRegistro">
              <li class="Registrese"><a href="register">¿Todavía no estás registrados?</a></li>
            </ul>
      </form>
      </div>
@endsection
