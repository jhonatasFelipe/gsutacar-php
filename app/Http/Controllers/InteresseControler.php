<?php

namespace App\Http\Controllers;

use App\Providers\MailInteresseService;
use App\Repositories\MailInteresseRepository;
use Illuminate\Http\Request;

class InteresseControler extends Controller
{
    public function index(Request $request, MailInteresseRepository $mailInteresse){
      $solicitacao =  $mailInteresse->create($request->all());
      $error = true;
      if ($solicitacao->successful()) {
         $error = false;
      }
       return redirect()->route('detalhe_carro',['id' => $request->id ,'menssagem'=> true , 'error' => $error ]);
    }

}
