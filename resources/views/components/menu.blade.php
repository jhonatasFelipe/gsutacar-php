<nav>
    <a href="{{route('home')}}" class="@if(Route::current()->getName() == 'home') active-menu @endif linkmenu">Home</a>
    <a href="{{route('carros')}}" class="@if(Route::current()->getName() == 'carros') active-menu @endif linkmenu">Veículos</a>
    <a href="{{route('empresa')}}" class="@if(Route::current()->getName() == 'empresa') active-menu @endif linkmenu">Nossa Empresa</a>
    <a href="{{route('financiamento')}}"class="@if(Route::current()->getName() == 'financiamento') active-menu @endif linkmenu">Financimento</a>
    <a href="{{route('contato')}}" 
    class="@if(Route::current()->getName() == 'contato') active-menu @endif linkmenu">Contato</a>
</nav>
