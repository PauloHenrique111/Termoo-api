<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermoController;

Route::post('/iniciar-jogo', [TermoController::class, 'iniciarJogo']);

Route::post('/validar-tentativa', [TermoController::class, 'validarTentativa']);