<?php

namespace App\View\Components;

use Illuminate\View\Component;

class teste extends Component
{

    public $nome;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.teste');
    }
}
