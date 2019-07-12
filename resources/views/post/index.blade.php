
<h1>Posteos</h1>

<ul>
  @foreach($posts as $post)
  <form class="" action="{{url('/posts')}}" >


   <div class="">
     Nombre del usuario:
       <input type="text" disabled name="name" value="  {{$post->user_id}}">
   </div>

   <div class="">
     Descripción:
       <input type="text" disabled name="description" value="  {{$post->description}}">
   </div>

  </form>

  @endforeach
</ul>
<ul>
  <a href="posts/new">Hacer un posteo</a> <br>
  <a href="/posts/{{$post->id}}">Eliminar un posteo</a> <br>
  <a href="/posts/{{$post->id}}/edit">Editar un posteo</a>

</ul>
