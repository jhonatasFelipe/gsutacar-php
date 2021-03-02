<header class="cabecalho-principal">
    <img src="{{asset('img/logogustacar.png')}}"/>
    <div>
        <div class="cima">
            <p class="email">
                contato@gustacar.com.br
            </p>
            <p class="telefone">
                (31) 2512-2609
            </p>
        </div>
        <div class='baixo'>
           <x-menu ></x-menu>
        </div>
    </div>
    <button class="abre-menu buton-acao"> <i class="fas fa-bars"></i></button>
    <nav class="menu-mobile escondido-esquerda">
        <header>
            Menu
        </header>
        <button class="fecha-menu buton-acao"> <i class="fas fa-times"></i></button>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('carros') }}">Veiculos</a>
        <a href="{{route('empresa')}}">Nossa Empresa</a>
        <a href="{{route('financiamento')}}">Financimento</a>
        <a href="{{route('contato')}}">Contato</a>
    </nav>
</header>
<script language="JavaScript" type="text/javascript" src="{{asset('js/abre-menu.js')}}"></script>
