<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cabecalhoInterno extends Component
{
    public $imagemFundo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imagemFundo)
    {
        $this->imagemFundo = $imagemFundo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cabecalho-interno');
    }
}
