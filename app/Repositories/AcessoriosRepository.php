<?php


namespace App\Repositories;


class AcessoriosRepository extends Repository
{
    public function __construct(string $url, string $endPoint)
    {
        parent::__construct($url, $endPoint);
    }
}
