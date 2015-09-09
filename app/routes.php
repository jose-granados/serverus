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

Route::resource('/', 'HomeController');

Route::get('login', 'HomeController@index');
Route::post('login', 'HomeController@login');
Route::get('logout', 'HomeController@logout');

Route::group(array('before' => 'auth'), function(){

	Route::resource('usuarios', 'UsuariosController');
	Route::resource('sistemasoperativos', 'SistemasOperativosController');
	Route::resource('cpus', 'CpusController');
	Route::resource('servidores', 'ServidoresController');
	Route::resource('switches', 'SwitchesController');
	Route::resource('apps', 'UsuariosController');
	Route::resource('servicios', 'ServiciosController');
	Route::resource('localizaciones', 'LocalizacionesController');
	Route::resource('apps', 'AppsController');
	Route::resource('logs', 'LogsController');
	Route::resource('dashboard', 'LocalizacionesController@dashboard');
	Route::resource('mantenimientos', 'MantenimientosController');

	Route::get('ubicacion/{id}','LocalizacionesController@ubicacion');
	
});

