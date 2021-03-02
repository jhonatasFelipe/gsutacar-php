<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PesquisaCompleta extends Component
{

    public $acessorios;
    public $marcas;
    public $motores;
    public $modelos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Array $acessorios, Array $marcas , Array $modelos, Array $motores)
    {
        $this->acessorios = $acessorios;
        $this->marcas = $marcas;
        $this->modelos = $modelos;
        $this->motores = $motores;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.pesquisa-completa');
    }
}
