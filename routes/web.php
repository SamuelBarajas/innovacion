<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/categorias', function () {
    return view('Categorias/categorias');
});
Route::get('/requisitos', function () {
    return view('Requisitos/requisitos');
});
Route::get('/evaluacion', function () {
    return view('Evaluacion/evaluacion');
});
Route::get('/premios', function () {
    return view('Premios/premios');
});
Route::get('/informacion', function () {
    return view('Informacion/informacion');
});