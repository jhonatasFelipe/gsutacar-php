<?php


namespace App\Repositories;


class ModeloRepository extends Repository
{
    public function __construct(string $url, string $endPoint)
    {
        parent::__construct($url, $endPoint);
    }
}
