    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<div>

<center><h1>E-mail</h1></center>

<div class="row col s6">
    <form action="{{route('send')}}" method="post" class="col s12">
    	@csrf
      <div class="row">
        <div class="input-field col s6">
          <input name="nome" id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s6">
          <input name="destino" id="email" type="text" class="validate">
          <label for="email">E-mail</label>
        </div>

        <div class="input-field col s6">
          <input name="assunto" id="assunto" type="text" class="validate">
          <label for="assunto">Assunto</label>
        </div>


        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="corpo" id="corpo" type="text"  cols="30" rows="10"></textarea>
          <label for="corpo">Descrição</label>
        </div>
                
        </div>
      </div>
      <center>
      <button class="waves-effect waves-light btn" type="submit">Enviar</button>
      </center>
    </form>
  </div>


</div>
