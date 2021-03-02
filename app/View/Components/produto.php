<?php

namespace App\View\Components;

use Illuminate\View\Component;

class produto extends Component
{

    public $produto;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($produto)
    {
        $this->produto = $produto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.produto');
    }
}
