<?php

namespace App\Repositories;

Class VeiculosRepository extends Repository{

    public function __construct(string $url, string $endPoint){

        parent::__construct($url,$endPoint);
    }

}
