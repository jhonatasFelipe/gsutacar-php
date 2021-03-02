<x-layout>
  <x-cabecalho-interno imagemFundo="{{$capa['path']}}">
   {{$veiculo['marca'].' '. $veiculo['modelo'] . ' ' . $veiculo['ano'].' / '. $veiculo['motor'] .' '. $veiculo['combustivel']}}
  </x-cabecalho-interno>
        @if($menssagem == "1")
            @if($error == 1)
               <x-aviso style="warn" >
                <h1>Não foi possivel enviar suas informações por favor entre em contato por telefone !</h1>
               </x-aviso>
            @else
               <x-aviso style="sucess" >
                <h1>Informações enviadas com sucesso, aguarde que já já retornaremos !</h1>
               </x-aviso>
            @endif
        @endif

  <div class="container parte-cima-detalhe">
    <div class="galleria">
        @foreach($veiculo['imagens'] as $imagem)
          <img src="{{$imagem['path']}}"/>
        @endforeach
    </div>
    <div class="info-car">
            <x-share>teste</x-share>
            <h3 class="paragrafo-1">Preço</h3>
            <p class="preco"> {{'R$'. number_format($veiculo['preco'],2,',','.')}}</p>
            <h3 class="paragrafo-1">Cor</h3>
            <p class="paragrafo-2">{{$veiculo['cor']}}</p>
            <h3 class="paragrafo-1">Kilômetragem</h3>
            <p class="paragrafo-2">{{number_format($veiculo['km'],0,',','.') .' Km'}}</p>
            <h3 class="paragrafo-1">Acessórios</h3>
                <span>
                @if(empty($veiculo['acessorios']))
                    Não tem acessórios
                @else
                    @foreach($veiculo['acessorios'] as $acessorio)
                <p class="acessorio">{{ $acessorio['nome'] }}</p>
                    @endforeach
                @endif
                </span>

                <h3 class="paragrafo-1">Observações</h3>
        <p class="paragrafo-2 observacao">{{$veiculo['obs']}}</p>
      <button class="input-1 botao-interesse botaoAbrir">Estou interessado neste carro!</button>
      <a href="{{route('carros')}}"><button class="input-1 botao-voltar">voltar para Veiculos</button></a>
    </div>
  </div>
  <p class="paragrafo-1 p-sugestao">Carros que você também possa gostar</p>
  <x-vitrine home="vitrine-home" :produtos=$sugestao modo="aleatorio" qtd="4"></x-vitrine>
  <x-modal nomeCarro="{{$veiculo['marca'].' '.$veiculo['modelo'].' '.$veiculo['ano']}}">
    <span class="interesse">
        @foreach($veiculo['imagens'] as $imagem)
          @if($imagem['capa'] == 1)
          <img class="imagem-interesse" src="{{$imagem['path']}}"/>
          @endif
        @endforeach
      <x-form-interesse :veiculo="$veiculo['id']" ></x-form-interesse>

    </span>
  </x-modal>
  <script src="{{asset('js/js.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/modal.js')}}" type="text/javascript"></script>
</x-layout>
