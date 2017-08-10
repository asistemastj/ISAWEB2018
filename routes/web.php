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
Route::resource('casos', 'Caso\CasoController', ['only' => 'index']);
#Documento
Route::resource('documentos', 'Documento\DocumentoController', ['only' => 'index']);
#Envio
Route::resource('envios', 'Envio\EnvioController', ['only' => 'index']);
#Usuarios
Route::resource('usuarios', 'User\UserController', ['only' => 'index']);
Route::resource('usuarios.envios', 'User\UserEnviocontroller', ['only' => 'index', 'store','update']);