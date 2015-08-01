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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('nombre/{nombre}', function($nombre){
    return "Mi nombre es: ".$nombre;
}); 

Route::resource('funcionario','FuncionarioController');
Route::get('funcionario/destroy/{identificacion_funcionario}', ['as' => 'funcionario/destroy', 'uses' => 'FuncionarioController@destroy']);
Route::post('funcionario/search', ['as' => 'funcionario/search', 'uses'=> 'FuncionarioController@search']);

//rutas paciente
Route::resource('paciente','PacienteController');
Route::get('paciente/destroy/{id}', ['as' => 'paciente/destroy', 'uses' => 'PacienteController@destroy']);
Route::post('paciente/search', ['as' => 'paciente/search', 'uses'=> 'PacienteController@search']);


Route::resource('comisaria','ComisariaController');
Route::get('comisaria/destroy/{id}', ['as' => 'comisaria/destroy', 'uses' => 'ComisariaController@destroy']);
Route::post('comisaria/search', ['as' => 'comisaria/search', 'uses'=> 'ComisariaController@search']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' =>	 'Auth\PasswordController',
]);
