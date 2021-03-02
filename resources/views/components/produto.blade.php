<a  href="{{'/detalhe/' . $produto['id']}}" class="produto">

    @foreach($produto['imagens'] as $imagem)
    @if($imagem['capa'] == 1)
    <img src="{{$imagem['path']}}"/>
    @endif
    @endforeach
    <p class="marca"> {{strtoupper($produto['marca'])}}</p>
    <p class="nome">{{ $produto['modelo']. ' - '. $produto['ano'].' '. $produto['combustivel'] .' '. $produto['motor']}} </p>
    <p class="preco">{{ 'R$ '.number_format($produto['preco'],2,',','.')}}</p>
</a>