<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
Route::resource('usuarios.envios', 'User\UserEnvioController', ['except' => 'show']);
Route::resource('usuarios.casos', 'User\UserCasoController', ['except' => 'show']);