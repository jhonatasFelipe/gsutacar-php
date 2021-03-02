<?php


namespace App\Repositories;


class AnoRepository extends Repository
{
    public function __construct(string $url, string $endPoint)
    {
        parent::__construct($url, $endPoint);
    }
}
