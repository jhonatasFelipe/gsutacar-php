<?php

namespace App\Http\Controllers;

use App\Repositories\AcessoriosRepository;
use App\Repositories\MarcaRepository;
use App\Repositories\ModeloRepository;
use App\Repositories\MotorRepository;
use App\Repositories\VeiculosRepository;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(  VeiculosRepository $veiculosRepo ,
                            AcessoriosRepository $acessorioRepo,
                            ModeloRepository $modeloRepository,
                            MarcaRepository $marcaRepository,
                            MotorRepository $motorRepository,
                            Request $request){
        $request->flash();
        $veiculos = $veiculosRepo->listAll($request->all());
        $acessorios = $acessorioRepo->listAll();
        $motores = $motorRepository->listAll();

        if($request->exists('marca') && $request->marca != "Todos") {
            $modelos = $modeloRepository->listAll(['marca'=>$request->marca]);
        }
        else{
            $modelos = [];
        }
        $marcas = $marcaRepository->listAll();

        return \view('carros',['veiculos'=>$veiculos,
                                    'acessorios'=>$acessorios,
                                    "motores" =>$motores,
                                    "modelos" => $modelos,
                                    'marcas' =>$marcas]);
    }
}
