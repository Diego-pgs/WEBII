<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/simples', function () {
    return "<h1>Rota</h1>";
});

Route::post('/add', function (Request $request) {
    return "<h1>Requisição POST</h1>";
});


Route::resource('/eixo', 'App\Http\Controllers\EixoController');
