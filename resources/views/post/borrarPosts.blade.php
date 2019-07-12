
<ul>
  @foreach ($posts as $post)
  <li>{{$post->description}}
  <form class="" action="{{url('/posts',$post->id)}}" method="post">
    @csrf
    {{method_field('DELETE')}}
    <button>Borrar</button>
  </form>

  </li>
  @endforeach
</ul>
