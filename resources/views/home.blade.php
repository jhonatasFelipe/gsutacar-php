<x-layout :metas=$metas>
    <div class="slide">
      <x-slide-show></x-slide-show>
    </div>
    <x-pesquisa :marcas=$marcas :motores=$motores ></x-pesquisa>
    <x-vitrine home="vitrine-home" :produtos=$veiculos ></x-vitrine>

</x-layout>
