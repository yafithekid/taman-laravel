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
Route::filter("auth",function(){
    if (Auth::guest()){
        return Redirect::route('login');
    }
});
Route::pattern('id','[0-9]+');

Route::group(['prefix' => '/api'],function(){
    Route::group(['prefix' => '/pengaduan'],function(){
        Route::post('/create',['uses' => 'ApiController@pengaduanPostCreate','as'=>'api.pengaduan.create.submit']);
        Route::get('/create',['uses' => 'ApiController@pengaduanGetCreate','as'=>'api.pengaduan.create']);
    });
});

Route::group(['prefix'=>'/pengaduan'],function()
{
    Route::group(['before'=>'auth'], function(){
        Route::any('/{id}/delete',['uses'=>'PengaduanController@anyDelete','as' => 'pengaduan.delete']);
        Route::any('/{id}/verifikasi/{verified}',['uses' => 'PengaduanController@anyVerifikasi','as'=>'pengaduan.verifikasi']);
    
    });
	
    Route::any('/index',['uses' => 'PengaduanController@anyIndex','as'=>'pengaduan.index']);
    Route::get('/create',['uses' => 'PengaduanController@getCreate','as' => 'pengaduan.create']);
    Route::post('/create',['uses' => 'PengaduanController@postCreate','as'=>'pengaduan.create.submit']);
	Route::any('/{id}/view',['uses' => 'PengaduanController@anyView','as' => 'pengaduan.view']);
    
    Route::post('/{id}/penanganan',['uses' => 'PengaduanController@postPenanganan','as'=>'pengaduan.penanganan.create.submit']);
});

Route::get('/login',['uses'=>'AutentikasiController@getLogin','as'=>'login']);
Route::post('/login',['uses'=>'AutentikasiController@postLogin','as'=>'login.submit']);
Route::get('/logout',['uses'=>'AutentikasiController@getLogout','as'=>'logout']);

Route::get('/',['uses'=>'PengaduanController@getHome','as'=>'home']);