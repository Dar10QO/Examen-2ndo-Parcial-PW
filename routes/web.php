<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;

Route::get('/', [ControladorFrituras::class, 'abrirFormulario'])->name('welcome');
Route::post('/registro',[ControladorFrituras::class, 'registrarFrituras'])->name('registroFrituras');
