<?php

namespace App\View\Components;

use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $metas;

    public function __construct($metas = [])
    {
        $this->metas = $metas;
        //$this->alltags = $this->geraTags();
    }

    public function geraTags(){

        return  [
            "type" =>[
                "og:type" => $this->type,
                "twiter:type" => $this->type,
                "type"=> $this->type,
            ],
            "description"=>[
                "og:description" => $this->description,
                "twiter:description" => $this->description,
            ],
            'title'=>[
                "og:title" => $this->title,
                "title" => $this->title,
                "twiter:title" => $this->title,
            ],
            'image'=>[
                "og:image"=> $this->image,
                "twiter:image" => $this->image,
            ],
            'url'=>[
                "og:url" => $this->url,
            ],
            'keywords' => $this->keyWords,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
