<!DOCTYPE html>
<html lang="es">
<head>
  @include('partials.head')
  <title>@yield("title")</title>
</head>
<body>
  <div class="@yield('page-class')">
    <header id="tope" class="encabezado">
        @include('partials.navbar')
        @include('partials.carrusel')
    </header>
  @yield('content')
  </div>
  @include('partials.footer')
</body>
</html>
