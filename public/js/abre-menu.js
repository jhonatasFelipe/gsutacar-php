(function(){
    window.addEventListener('load',function (){
        var $abreMenu = document.querySelector('.abre-menu');
        var $fechaMenu = document.querySelector('.fecha-menu');
        var $menu = document.querySelector('.menu-mobile');

        $abreMenu.addEventListener('click',function(){
            $menu.classList.add('entrar-tela');
        })

        $fechaMenu.addEventListener("click", function () {
            $menu.classList.remove('entrar-tela');
        });


    });
})()
