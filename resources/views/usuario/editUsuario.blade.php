<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar usuarios</title>
  </head>
  <body>

    <form class="" action="{{url('/editUsuario', $usuario->id)}}" method="post">
    @csrf
    {{ method_field('PATCH') }}
        <h3>{{$usuario->name}}</h3>
        <br>

    </form>
  </body>
</html>
