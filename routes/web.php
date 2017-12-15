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
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'GrupoController@index')->name('home');
Route::get('/notificarUsers', 'UserController@notificarUsers');

Route::group(['middleware' => ['auth']], function (){
	Route::resource('grupos', 'GrupoController');	
	Route::get('/grupos/{grupo_id}/configurar', [
		'as' => 'grupos.configurar',
		'uses' => 'GrupoController@configurar'
		]);
	/*Route::resource('integrantes', 'IntegranteController');*/	
	Route::get('/integrantes/{grupo_id}/index', [
		'as' => 'integrantes.index',
		'uses' => 'IntegranteController@index'
		]);
	Route::get('/integrantes/{grupo_id}/create', [
		'as' => 'integrantes.create',
		'uses' => 'IntegranteController@create'
		]);
	Route::post('/integrantes/{grupo_id}', [
		'as' => 'integrantes.store',
		'uses' => 'IntegranteController@store'
		]);
	Route::get('/integrantes/{id}', [
		'as' => 'integrantes.show',
		'uses' => 'IntegranteController@show'
		]);
	Route::get('/integrantes/{id}/edit', [
		'as' => 'integrantes.edit',
		'uses' => 'IntegranteController@edit'
		]);
	Route::put('/integrantes/{id}/{grupo_id}', [
		'as' => 'integrantes.update',
		'uses' => 'IntegranteController@update'
		]);
	Route::delete('/integrantes/{id}/{grupo_id}', [
		'as' => 'integrantes.destroy',
		'uses' => 'IntegranteController@destroy'
		]);
	Route::get('/integrantes/{grupo_id}/sortear', [
		'as' => 'integrantes.sortear',
		'uses' => 'IntegranteController@sortear'
		]);
});

Route::get('/notificar/{email}/{share_code}', [
	'as' => 'notificar',
	'uses' => 'IntegranteController@notificar'
	]);