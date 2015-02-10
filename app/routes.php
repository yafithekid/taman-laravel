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

Route::group(['prefix'=>'/pengaduan'],function()
{
    Route::group(['before'=>'auth'], function(){
        Route::any('/{id}/delete',['uses'=>'PengaduanController@anyDelete','as' => 'pengaduan.delete']);
        
    });
	
    Route::any('/index',['uses' => 'PengaduanController@anyIndex','as'=>'pengaduan.index']);
    Route::get('/create',['uses' => 'PengaduanController@getCreate','as' => 'pengaduan.create']);
    Route::post('/create',['uses' => 'PengaduanController@postCreate','as'=>'pengaduan.create.submit']);
	Route::any('/{id}/view',['uses' => 'PengaduanController@anyView','as' => 'pengaduan.view']);
    
    Route::any('/{id}/verifikasi',['uses' => 'PengaduanController@anyVerifikasi','as'=>'pengaduan.verifikasi']);
    Route::post('/{id}/penanganan',['uses' => 'PengaduanController@postPenanganan','as'=>'pengaduan.penanganan.create.submit']);
});

Route::get('/login',['uses'=>'AutentikasiController@getLogin','as'=>'login']);
Route::post('/login',['uses'=>'AutentikasiController@postLogin','as'=>'login.submit']);
Route::get('/logout',['uses'=>'AutentikasiController@getLogout','as'=>'logout']);

Route::get('/',['uses'=>'PengaduanController@getHome','as'=>'home']);