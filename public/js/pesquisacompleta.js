(function(){

        $formPesquisa = document.forms['form-pesquisa-completa'];
        $select = document.querySelector('.marca');
        $botafiltrar = document.querySelector('.botao-filtrar');


        $select.addEventListener('change',function (){
                $formPesquisa.submit();
        })

        $botafiltrar.addEventListener('click',function (){
            $formPesquisa.submit();
            fecharPesquisa();
        })


        $botaoAbrir = document.querySelector('.abrepesquisa');
        $componetPesquisa = document.querySelector('.pesquisa-completa');
        $botaofechar = document.querySelector('.botao-filtrar');

        $botaoAbrir.addEventListener('click',AbrirPesquisa);
        $botaofechar.addEventListener('click',fecharPesquisa);


        function AbrirPesquisa(){
            $componetPesquisa.classList.add('entrar-tela');
        }

        function fecharPesquisa(){
            $componetPesquisa.classList.remove('entrar-tela');
        }

})();
