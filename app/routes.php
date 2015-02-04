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


Route::group(['prefix'=>'/pengaduan'],function()
{
	Route::get('/create',['uses' => 'PengaduanController@getCreate','as' => 'pengaduan.create']);
	Route::post('/create',['uses' => 'PengaduanController@postCreate','as'=>'pengaduan.create.submit']);
	Route::any('/view',['uses' => 'PengaduanController@anyView','as' => 'pengaduan.view']);
    Route::any('/index',['uses' => 'PengaduanController@anyIndex','as'=>'pengaduan.index']);
    Route::any('/{id}/verifikasi',['uses' => 'PengaduanController@anyVerifikasi','as'=>'pengaduan.verifikasi']);
});

Route::get('/login',['uses'=>'SiteController@getLogin','as'=>'login']);
Route::post('/login',['uses'=>'SiteController@postLogin','as'=>'login.submit']);
Route::get('/logout',['uses'=>'SiteController@getLogout','as'=>'logout']);

Route::get('/',['uses'=>'SiteController@anyHome','as'=>'home']);