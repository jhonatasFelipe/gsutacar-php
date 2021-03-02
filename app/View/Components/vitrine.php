<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Vitrine extends Component
{

    public $produtos;
    public $qtd;
    public $modo;
    public $home;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($produtos,$qtd="",$modo="" ,$home="")
    {
        $this->produtos = $produtos;
        $this->modo = $modo;
        $this->home = $home;

        if(empty($qtd)){
         $this->qtd = count($produtos);
        }else{
            $this->qtd = $qtd;
        }

        if($this->modo == 'aleatorio'){
         $this->produtos = $this->aleatorio($produtos);
        }

    }


    public function aleatorio($produtos):Array{
        if(count($produtos) < $this->qtd){
            return $produtos;
        }
        $numeros = [];
        $novosprodutos = [];
        while(count($novosprodutos) < $this->qtd ){
            $novonumero = rand(0,count($produtos) - 1);
            if(!in_array($novonumero,$numeros)) {
                array_push($numeros, $novonumero);
                array_push($novosprodutos, $produtos[$novonumero]);
            }
        }
        return $novosprodutos;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.vitrine');
    }
}
