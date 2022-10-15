<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AcessoController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/Sobre', [SiteController::class, 'sobre']);
Route::get('/Contato', [SiteController::class, 'contato']);
Route::get('/FAQ', [SiteController::class, 'faq']);
Route::get('/Servico/RastreamentoVeicular', [SiteController::class, 'rastreamento']);
Route::get('/Servico/Seguro', [SiteController::class, 'seguro']);
Route::get('/Servico/BateriaMoura', [SiteController::class, 'bateria']);
Route::get('/Servico/AssistenciaVeicular', [SiteController::class, 'assistencia']);


Route::get('/Login', [AcessoController::class, 'login']);
Route::post('/Login', [AcessoController::class, 'valida']);
Route::get('/EsqueceuSenha', [AcessoController::class, 'reset']);
