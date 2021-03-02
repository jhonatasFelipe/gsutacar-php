<?php

namespace App\Http\Controllers;

use App\Repositories\MotorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Repositories\VeiculosRepository;
use App\Repositories\MarcaRepository;


class HomeController extends Controller
{
    public function index(Request $request,
                          VeiculosRepository $veiculoRepo,
                          MarcaRepository $marcasRepo,
                          MotorRepository $motorRepo ){

       $veiculos = $veiculoRepo->listAll($request->all());
       $marcas = $marcasRepo->listAll();
       $motores = $motorRepo->listAll();

       $metas = [
           "title" => "galo de meta title",
            "description" =>"teste de description",
            "type" => "Website",
            "image" => asset('img/logogustacar.png'),
            "url"=> url()->current(),
            "name" =>"Gustacar Revendora de veiculos",
       ];

        return \view('home',["veiculos" => $veiculos,
                                "marcas" => $marcas ,
                                "motores" => $motores ,
                                "metas"=> $metas]);
    }



}
