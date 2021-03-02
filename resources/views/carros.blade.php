<x-layout>
    <x-cabecalho-interno imagemFundo="{{asset('img/mulher-com-chave.png')}}">Veículos</x-cabecalho-interno>
    <div class="interno-carros">
        <x-pesquisa-completa :acessorios=$acessorios :marcas=$marcas :modelos=$modelos :motores=$motores></x-pesquisa-completa>
        <x-vitrine :produtos=$veiculos ></x-vitrine>
    </div>
</x-layout>
