<!-- Plantilla para usuarios logueados -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/master28042019.css') }}">
  <title>
    @yield("titulo")
  </title>
  </head>
  <body class="@yield('page-class')">
    <header id="tope" class="encabezado">

 <!-- Aquí comienza NavBar- user -->
      <nav class="navbar navbar-expand-lg navbar-dark navbarra">
      <img class="logo" src="img/logo1.png" alt="logo_proyecto">
      <h2>Proyecto FloPaTin</h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item active">
            <a class="nav-link" href="perfil">NombreUsuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="juego">Juegos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ayuda_user">Ayuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
      <img class="logo d-none d-md-block" src="{{asset('img/logo.png')}}" alt="logo_proyecto">
    </nav>

<!-- Aquí va el codigo de Carousel -->
    <div class="">
      @yield('carousel')
    </div>
    </header>

    @yield('content')

  <!-- Aquí comienza footer -->
    <footer class="footer">
  <div class="contenedorfooter">
  <section class="sectionfooter">
       <ul class="container-fluid list-unstyled list-inline mb-0">
         <li class="list-inline-item">
          <p>Juega ahora en</p>
          <a href="https://facebook.com" target="_blank">
            <img src="img/fb.png" alt="facebook">
          </a>
        </li>
        <li class="list-inline-item">
          <p>Siguenos en</p>
          <a href="https://twitter.com" target="_blank">
            <img src="{{ asset('img/Twitter.png') }}" alt="twitter">
          </a>
        </li>
        <li class="list-inline-item">
          <p>Descargalo en el</p>
          <a href="https://itunes.apple.com" target="_blank">
            <img src="{{ asset('img/apple.png') }}" alt="itunes">
          </a>
        </li>
        <li class="list-inline-item">
          <p>Disponible en</p>
          <a href="https://play.google.com" target="_blank">
            <img src="{{asset('img/Androi.png') }}" alt="play-google">
          </a>
        </li>
        <li class="list-inline-item">
          <p>Ir arriba</p>
          <a href="#tope">
            <img src="{{ asset('img/unicornio.jpg') }}" alt="inicio">
          </a>
        </li>
      </ul>
      </section>
      <section class="copyright">
          <small>© 2019 <strong>Proyecto FloPaTin</strong>. ¿Todos los derechos reservados? Nah. Patente Pendiente.</small>
     </section>
   </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="{{asset('js/master.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  </body>
  </html>
