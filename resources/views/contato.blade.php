<x-layout>
    <x-cabecalho-interno imagemFundo="{{asset('img/mulher-com-chave.png')}}">
        Contato
    </x-cabecalho-interno>
    <h2 class="titulo-contato">
    Envie o seus dados pelo formulário de contato que retornaremos o mais rápido possível.
</h2>
<div class="divisao">
    <form class="form-contato">
        @csrf
        <span><label>Nome:</label><input/></span>
        <span><label>Telefone:</label><input/></span>
        <span><label>E-mail:</label><input/></span>
        <span><label>Mensagem:</label><textarea></textarea></span>
        <span><button class="button-contato">Enviar</button></span>
    </form>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.811955976416!2d-44.03417383174472!3d-19.97440891286745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6be14a87720ff%3A0xde3fba26be46df8a!2sAv.%20Coronel%20Benjamim%20Guimar%C3%A3es%2C%20909%20-%20Industrial%2C%20Contagem%20-%20MG%2C%2032235-000!5e0!3m2!1spt-BR!2sbr!4v1590525894416!5m2!1spt-BR!2sbr"
            width="80%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
</x-layout>