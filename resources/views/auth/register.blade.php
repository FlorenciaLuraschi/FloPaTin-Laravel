@extends('layouts.main_sinCarrusel')
@section('title', 'Proyecto FloPaTin-Registración')
@section('page-class', 'contener-fluid body_registro p-0')
@section('content')
<form method="POST" action="{{ route('register') }}" class="formulario1" enctype="multipart/form-data">
    @csrf
    <h2>Registrate en nuestra comunidad para jugar</h2>

    <label for="name" class="label1">{{ __('Nombre de Usuario') }}</label>
    <input id="name" type="text" class="field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="email" class="label1">{{ __('Correo de referencia') }}</label>
    <input id="email" type="email" class="field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password" class="label1">{{ __('Contraseña') }}</label>
    <input id="password" type="password" class="field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="">
    <small id="passwordHelpInline" class="text-muted smallpass">
        Utiliza 8 caracteres como mínimo combiando letras y números.
    </small>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <br>
    <label for="password-confirm" class="label1">{{ __('Confirmar Contraseña') }}</label>
    <input id="password-confirm" type="password" class="field" name="password_confirmation" required autocomplete="new-password">
    <br>

    {{-- <div class="pais">
    <label for="countrie_id" class="label1">{{ __('País') }}</label>
    <select class="" name="countrie_id">
        <option hidden value="">Seleccione su país</option>
        @foreach ($paises as $pais)
        <option value="{{$pais->id}}">{{$pais->name}}</option>
        @endforeach
        @error('countrie_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </section> --}}
        <br><br>
        <label for="avatar" class="label1">{{ __('Sube una foto de perfil') }}</label>
        <input class="field @error('avatar') is-invalid @enderror" type="file" name="avatar" id="avatar" value="{{ old('avatar') }}" required autofocus>
        @error('avatar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br><br>
        <button type="submit" class="bottonacceder">
            {{ __('Registrarme') }}
        </button>
</form>
@endsection
