<ul>
  @foreach($usuarios as $usuario)

  <li>  {{$usuario}} </li>

  @endforeach
</ul>


<ul>
  @foreach($usuario as $key =>$value)
  <li>{{$key.":". $value}}</li>
  @endforeach
</ul>
