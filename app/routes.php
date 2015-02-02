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

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(['prefix'=>'/pengaduan'],function()
{
	Route::get('/create',['uses' => 'PengaduanController@getCreate','as' => 'pengaduan.get_create']);
	Route::post('/create',['uses' => 'PengaduanController@postCreate','as'=>'pengaduan.post_create']);
	Route::any('/view',['uses' => 'PengaduanController@anyView','as' => 'pengaduan.view']);
});
