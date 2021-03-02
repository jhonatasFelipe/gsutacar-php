<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pesquisa extends Component
{
    public $marcas;
    public $modelos;
    public $motores;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($marcas,$modelos = [],$motores)
    {
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
        return view('components.pesquisa');
    }

   
}
