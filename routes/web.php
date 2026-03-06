<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;

Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);

Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

//Rota para abrir o formulário do exercício 2
Route::get('/exercicio2', [ExercicioController::class, 'exibirFormulario2']);
//Rota para receber os dados do formulário do exercício 2
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

Route::resource('categorias', CategoriaController::class);