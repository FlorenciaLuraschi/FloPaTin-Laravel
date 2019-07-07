@extends('layouts.main')
@section('title', 'Proyecto FloPaTin-Login')
@section('page-class', 'container-fluid p-0 body_login')
@section('content')
<form class="formlogin" action="{{ route('login') }}" method="POST">
    @csrf
    <h2>Iniciar Sesión</h2>
    <label for="email" class="label1">{{ __('Correo electrónico') }}</label>
    <input id="email" type="email" class="field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <label for="password" class="label1">{{ __('Contraseña') }}</label>
    <input id="password" type="password" class="@error('password') is-invalid @enderror field" name="password" required autocomplete="current-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="col-auto my-1">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label label1" for="remember">
                {{ __('Recordame') }}
            </label>
        </div>
    </div>
    <div class="olvidoPassword">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('¿Ólvido su contraseña?') }}
        </a>
        @endif
    </div>
    <div class="col-auto my-1">
        <button type="submit" class="bottonacceder">
            {{ __('Iniciar Sesión') }}
        </button>
    </div>
    <ul class="listadeRegistro">
        <li class="Registrese"><a class="btn btn-link" href="formularioDeRegistracion.php">¿Todavía no estás registrados?</a></li>
    </ul>
</form>
@endsection
