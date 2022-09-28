<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/Sobre', [SiteController::class, 'sobre']);
Route::get('/Contato', [SiteController::class, 'contato']);
