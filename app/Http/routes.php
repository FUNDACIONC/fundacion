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

Route::resource('Funcionario','FuncionarioController');

Route::get('Funcionario/destroy/{identificacion_funcionario}', ['as' => 'Funcionario/destroy', 'uses' => 'FuncionarioController@destroy']);

Route::post('Funcionario/search', ['as' => 'Funcionario/search', 'uses'=> 'FuncionarioController@search']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
