<?php

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
    return view('welcome');
});

#Archivos
Route::resource('archivos', 'Archivo\ArchivoController', ['only' => 'index']);
#Area
Route::resource('areas', 'Area\AreaController', ['only' => 'index']);
#Caso
Route::resource('casos', 'Casos\CasosController', ['only' => 'index']);