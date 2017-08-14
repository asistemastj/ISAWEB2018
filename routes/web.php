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

#vistas del frontend
Route::get('/','FrontController@index');
Route::get('/nosotros','FrontController@abousUs');
Route::get('/servicios','FrontController@service');
Route::get('/ubicacion','FrontController@location');
Route::get('/contacto','FrontController@contact');
Route::get('/logros','FrontController@logros');
Route::get('/equipo','FrontController@team');
Route::get('/transporte','FrontController@transport');
Route::get('/faq','FrontController@faq');