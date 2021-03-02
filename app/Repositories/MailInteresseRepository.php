<?php


namespace App\Repositories;


class MailInteresseRepository extends Repository
{
    public function __construct(string $url, string $endPoint)
    {
        parent::__construct($url, $endPoint);
    }
}
