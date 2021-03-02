<div class='vitrine {{ $home }}'>

    @if($produtos)
        @foreach($produtos as $produto)
            <x-produto :produto=$produto></x-produto>
        @endforeach
    @else
        <h1> Nenhuma resultado encontrado</h1>
    @endif
</div>
