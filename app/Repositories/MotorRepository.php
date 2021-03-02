<?php


namespace App\Repositories;


class MotorRepository extends Repository
{
 public function __construct(string $url, string $endPoint)
 {
     parent::__construct($url, $endPoint);
 }
}
