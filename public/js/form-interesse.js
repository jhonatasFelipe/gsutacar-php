(function (){
    window.addEventListener('load',function (){
        const $telefone = document.getElementsByName('telefone');
        $telefone[0].addEventListener('keyup',function (){
            mascara("(##)#####-####",this,event,false);
        });
    });
})();
