<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::group(['before' => 'auth'], function()
{
    Route::resource('clientes','ClientesController');


});
Route::resource('clippings','ClippingsController');
Route::resource('sessions','SessionsController');
Route::resource('veiculos','VeiculosController');
Route::post('clientes','ClientesController@buscaClientes');

Route::get('/', function()
{
	return View::make('landing');
});
/*
Route::get('/',function(){
    $usuarios = User::all();
    foreach ($usuarios as $usuario) {
        $usuario->senha = Hash::make($usuario->senha);
        $usuario->save();
    }
});
*/
