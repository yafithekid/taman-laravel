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

Route::group(['prefix' => '/pengguna','before' => 'auth'],function(){
    Route::get('/create',['uses' => 'PenggunaController@getCreate' ,'as' =>'pengguna.create']);
    Route::post('/create',['uses' => 'PenggunaController@postCreate' , 'as' =>'pengguna.create.submit']);
    Route::get('/{id}/update',['uses' => 'PenggunaController@getUpdate', 'as' =>'pengguna.update']);
    Route::post('/{id}/update',['uses' => 'PenggunaController@postUpdate' , 'as' => 'pengguna.update.submit']);
    Route::get('/index',['uses' => 'PenggunaController@getIndex', 'as' =>'pengguna.index']);
    Route::get('/{id}/delete',['uses' => 'PenggunaController@getDelete','as' => 'pengguna.delete']);
});

Route::group(['prefix' => '/taman','before' => 'auth'],function(){
    Route::get('/create',['uses' => 'TamanController@getCreate' ,'as' =>'taman.create']);
    Route::post('/create',['uses' => 'TamanController@postCreate' , 'as' =>'taman.create.submit']);
    Route::get('/{id}/update',['uses' => 'TamanController@getUpdate', 'as' =>'taman.update']);
    Route::post('/{id}/update',['uses' => 'TamanController@postUpdate' , 'as' => 'taman.update.submit']);
    Route::get('/index',['uses' => 'TamanController@getIndex', 'as' =>'taman.index']);
    Route::get('/{id}/delete',['uses' => 'TamanController@getDelete','as' => 'taman.delete']);
});

Route::group(['prefix' => '/kategori_pengguna','before' => 'auth'],function(){
    Route::get('/create',['uses' => 'KategoriPenggunaController@getCreate' ,'as' =>'kategori_pengguna.create']);
    Route::post('/create',['uses' => 'KategoriPenggunaController@postCreate' , 'as' =>'kategori_pengguna.create.submit']);
    Route::get('/{id}/update',['uses' => 'KategoriPenggunaController@getUpdate', 'as' =>'kategori_pengguna.update']);
    Route::post('/{id}/update',['uses' => 'KategoriPenggunaController@postUpdate' , 'as' => 'kategori_pengguna.update.submit']);
    Route::get('/index',['uses' => 'KategoriPenggunaController@getIndex', 'as' =>'kategori_pengguna.index']);
    Route::get('/{id}/delete',['uses' => 'KategoriPenggunaController@getDelete','as' => 'kategori_pengguna.delete']);
});

Route::group(['prefix' => '/kategori_pengaduan','before' => 'auth'],function(){
    Route::get('/create',['uses' => 'KategoriPengaduanController@getCreate' ,'as' =>'kategori_pengaduan.create']);
    Route::post('/create',['uses' => 'KategoriPengaduanController@postCreate' , 'as' =>'kategori_pengaduan.create.submit']);
    Route::get('/{id}/update',['uses' => 'KategoriPengaduanController@getUpdate', 'as' =>'kategori_pengaduan.update']);
    Route::post('/{id}/update',['uses' => 'KategoriPengaduanController@postUpdate' , 'as' => 'kategori_pengaduan.update.submit']);
    Route::get('/index',['uses' => 'KategoriPengaduanController@getIndex', 'as' =>'kategori_pengaduan.index']);
    Route::get('/{id}/delete',['uses' => 'KategoriPengaduanController@getDelete','as' => 'kategori_pengaduan.delete']);
});

Route::group(['prefix'=>'/pengaduan'],function()
{
    Route::group(['before'=>'auth'], function(){
        Route::any('/{id}/delete',['uses'=>'PengaduanController@anyDelete','as' => 'pengaduan.delete']);
        Route::any('/{id}/verifikasi/{verified}',['uses' => 'PengaduanController@anyVerifikasi','as'=>'pengaduan.verifikasi']);
        Route::get('/{id}/email',['uses' => 'PengaduanController@getEmail','as'=>'pengaduan.email']);
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