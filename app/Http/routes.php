<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AccesoController@index');

Route::get('/control-panel', function(){
	return view('controlpanel');
});

/*Rutas para el sistema de informe financiero*/

Route::group(['prefix' => 'informe'], function(){

   Route::resource('tipospolizas', 'PolizasController');

   Route::get('tipospolizas/{id}/destroy', [
   	    'uses' => 'PolizasController@destroy',
   	    'as' => 'informes.tipospolizas.destroy'
   	]);



});