<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInteresse extends Component
{

    public $veiculo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($veiculo)
    {
        $this->veiculo = $veiculo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form-interesse');
    }
}
