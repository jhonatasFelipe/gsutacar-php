<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanciamentoController extends Controller
{
    public function index(){
       return \view('financiamento');
    }
}
