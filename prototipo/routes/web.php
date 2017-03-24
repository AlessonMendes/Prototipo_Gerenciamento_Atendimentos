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

Route::get('/', ['uses' => 'pendenciaController@index']);
Route::get('/pendencia', ['uses' => 'pendenciaController@formulario']);
Route::get('/atendimento', ['uses' => 'atendimentoController@index']);

Route::get('/listar', ['uses' => 'contatoController@lista']);
Route::get('/listarajax' , ['uses' => 'contatoController@listarajax']);

