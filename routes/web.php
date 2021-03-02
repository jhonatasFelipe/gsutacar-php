<?php

use App\Http\Controllers\InteresseControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetalheCarroController;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FinanciamentoController;
use App\Http\Controllers\ContatoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/carros', [CarrosController::class, 'index'])->name('carros');
Route::get('/detalhe/{id}', [DetalheCarroController::class, 'index'])->name("detalhe_carro");
Route::post('/interesse/{id}', [InteresseControler:: class, 'index'])->name("interesse");
Route::get('/nossa-empresa', [EmpresaController:: class, 'index'])->name("empresa");
Route::get('/financiamento', [FinanciamentoController:: class, 'index'])->name("financiamento");
Route::get('/contato', [ContatoController:: class, 'index'])->name("contato");
