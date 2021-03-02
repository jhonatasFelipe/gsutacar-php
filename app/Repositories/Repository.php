<?php

namespace App\Repositories;

use GuzzleHttp\Exception\ConnectException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\http\Client\Response;

Class Repository{

   public  $url;

   public $endPoint;

    public function __construct(String $url, String $endPoint){
        $this->url = $url;
        $this->endPoint = $endPoint;

    }

   public function listAll (Array $filtros = []): Array {
        $resposta = [];
        try{
           $resposta =  Http::get($this->url.$this->endPoint.$this->criadorDeConsultas($filtros))->json();
        }
        catch (ConnectException $exception){
            $resposta =[];
        }
        return $resposta;
   }

   public function create(Array $data) : Response {
       return Http::asForm()->post($this->url.$this->endPoint,$data);
   }

   public function byId($id){
       return Http::get($this->url.$this->endPoint."/".$id)->json();

   }

   protected function update(){

   }

   protected function delete(){

   }

   public function criadorDeConsultas(Array $parametros): string {
    unset($parametros['_token']);

    $stringDeConsulta = '';
    if(!empty($parametros)){
        $stringDeConsulta = '?';

        foreach($parametros as $chave =>$valor){
            if(!(empty($valor) || $valor == 'Todos')){
                $stringDeConsulta .= $chave.'='.$valor;
            }
            if(end($parametros) != $valor){
               $stringDeConsulta .='&';
            }
        }
    }

    return $stringDeConsulta;
}
}
