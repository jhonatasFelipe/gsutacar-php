<?php

namespace App\Repositories;


class MarcaRepository extends Repository{

    public function __construct(string $url, string $endPoint)
    {
        parent::__construct($url, $endPoint);
    }

}
