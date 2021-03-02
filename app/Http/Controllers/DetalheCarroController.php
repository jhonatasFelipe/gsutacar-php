<?php

namespace App\Http\Controllers;
use App\Repositories\VeiculosRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetalheCarroController extends Controller
{
    public function index(Request $request, VeiculosRepository $veiculoRepo){
        $id = $request->id;
        $menssagem = $request->menssagem;
        $error = $request->error;
        $veiculo = $veiculoRepo->byId($id);
        $sugestao = $veiculoRepo->listAll();
        $capa ="";
        foreach($veiculo['imagens'] as $imagem){
            if($imagem['capa'] == 1){
                $capa = $imagem;
            }
        }
        return \view('detalhe-carro',['veiculo' => $veiculo ,
                                        'capa'=> $capa ,
                                        'sugestao'=> $sugestao,
                                        'menssagem'=>$menssagem,
                                        'error' => $error
        ]);
    }
}
