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
Route::get('/','FrontController@index')->name('home');
Route::get('/nosotros','FrontController@abousUs')->name('nosotros');
Route::get('/servicios','FrontController@service')->name('servicios');
Route::get('/ubicacion','FrontController@location')->name('ubicacion');
Route::get('/contacto','FrontController@contact')->name('contacto');
Route::get('/logros','FrontController@logros')->name('logros');
Route::get('/equipo','FrontController@team')->name('equipo');
Route::get('/transporte','FrontController@transport')->name('transporte');