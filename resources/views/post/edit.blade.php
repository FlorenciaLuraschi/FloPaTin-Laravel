<form  action="/posts/{{$post->id}}" method="POST">
  @csrf
  {{method_field('PATCH')}}
  <div class="form-group">
    <textarea class="form-control estilotextarea" name="description" id="FormControlTextarea" rows="3" cols="60" placeholder="Agrega un comentario...">{{old('description', $post->description)}}</textarea>
  </div>
  <button class="bottoncomentario" type="submit">Enviar</button>
</form>
