<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar usuarios</title>
  </head>
  <body>

    <form class="" action="{{url('/editUsuario')}}" method="post">
    @csrf
    {{ method_field('PATCH') }}
        <h3>{{$usuario->name}}</h3>
        <br>
         <ul>
      @foreach($usuario as $key => $usuario)
        <label>@if($key == 'id')</label>
        <input type="text" disabled name="{{$key}}" value="{{$usuario}}">
        @else
        <input type="text" name="{{$key}}" value="{{$usuario}}">
        @endif
      @endforeach
        </ul>
    </form>
  </body>
</html>
