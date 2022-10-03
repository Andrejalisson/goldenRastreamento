<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/Sobre', [SiteController::class, 'sobre']);
Route::get('/Contato', [SiteController::class, 'contato']);
Route::get('/FAQ', [SiteController::class, 'faq']);
Route::get('/Servico/RastreamentoVeicular', [SiteController::class, 'rastreamento']);
Route::get('/Servico/Seguro', [SiteController::class, 'seguro']);
Route::get('/Servico/BateriaMoura', [SiteController::class, 'bateria']);
Route::get('/Servico/AssistenciaVeicular', [SiteController::class, 'assistencia']);
