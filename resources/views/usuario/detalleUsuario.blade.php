
<h1>Actualización de usuarios</h1>

<ul>
  @foreach($usuarios as $usuario)
  <form class="" action="{{url('/editUsuario', $usuario->id)}}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="">
      Id del usuario:
        <input type="text" disabled name="id" value=" {{$usuario->id}}">
    </div>

   <div class="">
     Nombre del usuario:
       <input type="text" name="name" value="  {{$usuario->name}}">
   </div>

   <div class="">
     Email:
       <input type="text" name="email" value="  {{$usuario->email}}">
   </div>

   <div class="">
     Contraseña:
       <input type="text" name="password" value="  {{$usuario->password}}">
   </div>

   <div class="">
     Avatar:
       <input type="text" name="avatar" value="  {{$usuario->avatar}}">
   </div>

   <div class="">
     Rol:
       <input type="text" name="role" value="  {{$usuario->role}}">
   </div>

   <div class="">
     IdPaís:
       <input type="text" name="country_id" value=" {{$usuario->country_id}}">
   </div>

   <button name="button">Actualizar</button>

  </form>


  @endforeach
</ul>
