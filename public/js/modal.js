(function (){
        var modal = document.querySelector('.modal');
        var botaoAbrir = document.querySelector('.botaoAbrir');
        var botaoFechar = document.querySelector('.botaoFechar');
        botaoFechar.addEventListener('click',function(){
            modal.classList.remove('aberto');

        });

        botaoAbrir.addEventListener('click',function(){
            modal.classList.add('aberto');
        });
})();
