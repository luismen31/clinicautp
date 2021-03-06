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

//Si esta autenticado vera estas rutas
Route::group(['middleware' => 'auth'], function() {
    
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	
	Route::get('/', function () {
	    return view('app');
	});
	
	Route::resource('agenda', 'AgendaCitasController');
	Route::resource('pacientes', 'PacientesController');
	
	Route::get('documentos', function(){
		return view('documentos.index');
	});
	
	Route::group(['prefix' => 'documentos'], function(){
		Route::resource('receta-laboratorio', 'RecetasLaboratorioController');
	});
	Route::controller('buscar', 'SearchController');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
