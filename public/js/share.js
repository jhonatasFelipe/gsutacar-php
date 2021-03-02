(function(){
    let  $botao_compartilhar = document.querySelector('.botao-share');
    let $links = document.querySelectorAll('.share > a');

    if(navigator.share !== undefined){
        $links.forEach(function (ele){
            ele.style.display = "none";
        });
    }else{
        $botao_compartilhar.style.display = "none";
    }

    window.addEventListener('load',function (){
        $botao_compartilhar.addEventListener('click',function () {
                if(navigator.share !== undefined) {
                    navigator.share({
                        url: window.location.href,
                    }).then(() => {

                    });
                }
        });
    })
})();
