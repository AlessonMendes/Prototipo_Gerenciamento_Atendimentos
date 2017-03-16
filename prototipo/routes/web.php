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
    return view('inicial');
});
//Route::get('/', ['uses' => 'contatoController@index']);
//Route::post('/', ['uses' => 'contatoController@cadastrar']);

Route::get('/listar', ['uses' => 'contatoController@lista']);
Route::get('/listarajax' , ['uses' => 'contatoController@listarajax']);

