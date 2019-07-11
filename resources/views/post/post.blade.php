<form  action="/posts" method="POST">
  @csrf
  <div class="form-group">
    <textarea class="form-control estilotextarea" name="description" id="FormControlTextarea" rows="3" cols="60" placeholder="Agrega un comentario..."></textarea>
  </div>
  <button class="bottoncomentario" type="submit">Enviar</button>
</form>
