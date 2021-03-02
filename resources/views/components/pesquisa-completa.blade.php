<div class="pesquisa-completa">
    <form action="{{route('carros')}}" method="GET" name="form-pesquisa-completa" >
        <label>Marca:</label>
        <select name="marca" class="marca">
            <option value="Todos"> Todos</option>
            @foreach($marcas as $marca)
                <option
                    @if(old('marca') == $marca['nome'])
                    selected
                    @endif
                >{{ $marca['nome']}}</option>
            @endforeach
        </select>
        <label>Modelo:</label>
        <select name="modelo">
            @if($modelos == [])
            <option value="Todos">Selecione uma marca</option>
            @else
                <option value="Todos"> Todos</option>
                @foreach($modelos as $modelo)
                    <option>{{ $modelo['nome']}}</option>
                @endforeach
            @endif
        </select>
        <label>De:</label>
        <select name="de">
            <option value="Todos">Todos</option>
            @for ($i = 2020; $i >= 1970; $i--)
                <option value="{{ $i }}"
                        @if(old('de') == $i)
                        selected
                    @endif>{{ $i }}</option>
            @endfor
        </select>
        <label>até</label>
        <select name="ate">
            <option value="Todos">Todos</option>
            @for ($i = 2020; $i >= 1970; $i--)
                <option value="{{ $i }}"
                        @if(old('de') == $i)
                        selected
                    @endif>{{ $i }}</option>
            @endfor
        </select>
        <label>Motor:</label>
        <select name="motor">
            <option value="Todos"> Todos</option>
            @foreach($motores as $motor)
                <option>{{ $motor['potencia']}}</option>
            @endforeach
        </select>
        @foreach($acessorios as $acessorio)
            <span>
                <input type="checkbox" value="{{ $acessorio['id'] }}" name="teste"/>
                <label>{{$acessorio['nome']}}</label>
            </span>
        @endforeach

        <button class="botao-filtrar">Filtrar</button>
    </form>
</div>

<button class="abrepesquisa buton-acao"> Filtrar <i class="fas fa-search"></i></button>

<script src="{{asset('js/pesquisacompleta.js')}}" type="text/javascript"></script>
