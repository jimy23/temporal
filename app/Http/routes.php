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

Route::get('/', function () {
    return view('welcome');
});

Route::get('board', function() {
    return view('boards\b_estudiante');
});

Route::get('board2', function() {
    return view('layout_est');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register/{codigoInstitucion}', 'Auth\AuthController@getGrupos');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('home', 'HomeController@index');

//Instituciones
Route::get('instituciones', 'InstitucionController@index');
Route::get('instituciones/ingresar', 'InstitucionController@create');
Route::post('instituciones', 'InstitucionController@store');

//Grupos
Route::get('grupos', 'GrupoController@index');
Route::get('grupos/ingresar', 'GrupoController@create');
Route::post('grupos', 'GrupoController@store');
