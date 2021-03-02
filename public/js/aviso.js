(function(){
    window.addEventListener('load',function(){
        const $div = document.querySelector('.aviso');
        const $botao = document.querySelector('.botao-fecha-aviso');

        $div.classList.add('entrar-tela-cima');
        $interval = setTimeout(fecha,5000);

        function fecha(){
            $div.classList.remove('entrar-tela-cima');
            clearTimeout($interval);
        }

        $botao.addEventListener('click',fecha);
    });
})();
