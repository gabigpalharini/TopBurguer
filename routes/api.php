<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/all', [ProdutoController::class, 'retornarTodos']);
Route::post('/produtos', [ProdutoController::class, 'store']);



Route::get('/cliente', [ClienteController::class, 'index']);
Route::post('/cliente', [ClienteController::class, 'store']);
