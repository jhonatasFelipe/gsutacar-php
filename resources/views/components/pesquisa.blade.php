<div class="pesquisa">
    <p>Escolha o seu novo carro!</p>
    <form action="{{route('carros')}}" method="GET">
     @csrf
       <span>
          <label for="marca" class="campo">Marca:</label>
          <select id="marca" class="input-1" name="marca" value="2">
               <option value="Todos">Todos</option>
               @foreach($marcas as $marca)
               <option value="{{$marca['nome']}}"
               @if(old('marca') == $marca['nome'])
                    selected
               @endif
               >{{$marca['nome']}}</option>
               @endforeach
       </select>
       </span>
       <span><label for="modelo" class="campo">Modelo:</label><select name="modelo" id="modelo"class="input-1">
          <option value="Todos">Todos</option>
          @if(isset($modelo))
               @foreach($modelos as $modelos)
               <option value="{{$modelo['nome']}}"
               @if(old('modelos') == $modelo['nome']){
                 selected
               @endif
               >{{$modelo['nome']}}</option>
               @endforeach
          @endif
       </select></span>
       <span><label for="de" class="campo">De:</label><select name="de" id="de"class="input-1">
          <option value="Todos">Todos</option>
            @for ($i = 2020; $i >= 1970; $i--)
            <option value="{{ $i }}"
            @if(old('de') == $i)
                 selected
            @endif>{{ $i }}</option>
            @endfor
       </select></span>
       <span><label for="ate" class="campo">Até:</label><select name="ate" id="ate" class="input-1">
          <option value="Todos">Todos</option>
            @for ($i = 2020; $i >= 1970; $i--)
            <option value="{{ $i }}"
            @if(old('de') == $i)
                 selected
            @endif
            >{{ $i }}</option>
            @endfor
           </select>
            </span>
       <span><label for="motor" class="campo">Motor:</label><select name="motor" id="motor" class="input-1">
          <option value="Todos">Todos</option>
            @foreach($motores as $motor)
                <option value="{{$motor['potencia']}}"
                @if(old('motor')== $motor['potencia']))
                selected
                @endif
                >{{$motor['potencia']}}</option>
            @endforeach
            </select></span>
            <button class="input-1"> Pesquisar</button>
    </form>
</div>
