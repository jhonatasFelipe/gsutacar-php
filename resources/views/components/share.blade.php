
<div class="share">
    <header>
        <p>Compartilhar:</p>
    </header>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current()}}" target="_blank"><img src="{{ asset('img/facebook.png') }}"/></a>
    <a href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank"><img src="{{ asset('img/whatsapp.png') }}"/></a>
    <button class="botao-share"><i class="fas fa-share-alt"></i></button>
</div>
<script src="{{asset('js/share.js')}}" type="text/javascript"></script>


