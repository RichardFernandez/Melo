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

/*Rutas para crear el crud de todos os empleados de frupo melo*/

Route::resource('empleados', 'EmpleadosController');

Route::get('empleados/{id}/destroy',[
    'uses' => 'EmpleadosController@destroy',
    'as' => 'empleados.destroy'
  ]);

/*Rutas para el crud de empresas*/

Route::resource('empresas', 'EmpresasController');

Route::get('empresas/{id}/destroy', [
   'uses' => 'EmpresasController@destroy',
   'as' => 'empresas.destroy'
  ]);


/*Rutas para el sistema de informe financiero*/

Route::group(['prefix' => 'informe'], function(){

   Route::resource('tipospolizas', 'PolizasController');

   Route::get('tipospolizas/{id}/destroy', [
   	    'uses' => 'PolizasController@destroy',
   	    'as' => 'informe.tipospolizas.destroy'
   	]);

   Route::resource('cuentas', 'CuentasController');

   Route::get('cuentas/{id}/destroy', [
        'uses' => 'CuentasController@destroy',
        'as' => 'informe.cuentas.destroy'
   	]);

   Route::resource('usuarios', 'UsuariosController');

   Route::get('usuarios/{id}/destroy',[
        'uses' => 'UsuariosController@destroy',
        'as' => 'informe.usuarios.destroy'
    ]);

   /*Rutas de proyectos*/

   Route::resource('proyectos', 'ProyectosController');

   Route::get('proyectos/{id}/destroy', [
        'uses' => 'ProyectosController@destroy',
        'as' => 'informe.proyectos.destroy'
    ]);

   /*Rutas para configuracion de proyectos*/

   Route::resource('configuracionproyectos', 'ConfiguracionproyectosController');

   Route::get('configuracionproyectos/{id}/destroy', [
      'uses' => 'ConfiguracionproyectosController@destroy',
      'as' => 'informe.configuracionproyectos.destroy'
    ]);

   /* Final de rutas de informe financiero*/

});