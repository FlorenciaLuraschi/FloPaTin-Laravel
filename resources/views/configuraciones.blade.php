@extends('layouts.vistaUsuario')

@section('titulo', 'Proyecto FloPaTin-Configuración')

@section('page-class', 'body-perfil')

@section('content')


  <div class="container-fluid">
    <div class="contenedor_perfil">
      <section>
        <div class="maxwidth_configuracion">

            <!--foto de perfil-->
            <div class="card targeta_perfil">
              <div class="foto_usuario">
                <img src="imagenes/{{$_SESSION["foto"]}}" class="card-img-top" alt="">
                <div class="p-0 formavatar">
                  <form  action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="form" value="form1">
                    <div class="archivo_edit">
                     <input type="file" name="foto" id="foto" value="<?=(isset($errores["foto"]))?"" :persistir("foto");?>">
                     <br>
                     @if(isset($errores["foto"]))
                       <span class="errorperfil">
                         {{ $errores["foto"]}}
                       </span>
                     @endif
                    </div>
                    <button class="bottoneditar bottonavatar" type="submit">Editar</button>
                  </form>
                </div>
              </div>
              <div class="card-body cuadroperfil1 p-0">
                <div class="editar">
                  <h5 class="card-title">{{$_SESSION["nombreUsuario"]}}</h5>
                  <div class="p-0">
                  <form  action="" method="POST">
                    <input type="hidden" name="form" value="form2">
                    <input type="text" name="nombre-de-usuario" class="field editinput" value="">
                    <br>
                    @if(isset($errores["nombre-de-usuario"]))
                      <span class="errorperfil">
                      {{$errores["nombre-de-usuario"]}}
                      </span>
                     @endif
                    <button class="bottoneditar bottonnombre" type="submit">Editar</button>
                  </form>
                </div>
                </div>
              </div>
            </div>

        </div>
      </section>
    </div>
  </div>
@endsection
