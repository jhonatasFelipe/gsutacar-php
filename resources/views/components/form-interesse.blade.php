<form class="form-interesse" action="{{'/interesse/'.$veiculo}}" method="POST">
    @csrf
    <label>Nome:</label>
  <input type="text" name="nome" required/>
  <label>E-mail:</label>
  <input type="email" name="email"  required/>
  <label>Telefone:</label>
  <input type="text" name="telefone" required />
    <input type="hidden" name="veiculo" value="{{$veiculo}}">
  <button>Enviar</button>
</form>
<script src="{{asset("js/mascara.min.js")}}" type="text/javascript"></script>
<script src="{{asset("js/form-interesse.js")}}" type="text/javascript"  ></script>
