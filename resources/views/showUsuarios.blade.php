<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <div class="container">
    <div class="">
      <h1>Listado de Usuarios</h1>
    </div>
    <div class="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Usuarios</th>
            <th scope="col">Mostrar</th>
            <th scope="col">Modificar</th>
            <th scope="col">Borrar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
              <tr>

                <th scope="row">{{$usuario->id}}</th>
                <td>{{$usuario->name}}</td>
                <td><a href="detalleUsuario?id={{$usuario->id}}">
                      <i class="far fa-eye"></i>
                    </a>
                </td>
                <td><a href="editUsuario?id={{$usuario->id}}">
                      <i class="far fa-edit"></i>
                    </a>
                </td>
                <td><a href="borrarUsuario?id={{$usuario->id}}">
                      <i class="far fa-trash-alt"></i>
                    </a>
                </td>

              </tr>
            @endforeach
        </tbody>
    </div>
</div>
<!-- <ul>
  @foreach ($usuarios as $usuario)
  <li>{{$usuario->name}}</li>
  @endforeach
</ul> -->
<a href="perfil.php">Retornar</a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
