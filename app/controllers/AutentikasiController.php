<?php

class AutentikasiController extends BaseController {

    

    public function getLogin(){
        return View::make('site.login',['model'=>new Pengguna()]);
    }

    public function getLogout(){
        Auth::logout();
        return Redirect::route('home');
    }

    public function postLogin(){
        $username = Input::get('username');
        $password = sha1(Input::get('username'));

        $model = Pengguna::where('username','=',$username)->where('password','=',$password)->first();
        if ($model === null){
            $model = new Pengguna(); $model->username = $username;
            Session::flash('login.error','Invalid username/password');
            return View::make('site.login',['model' => $model]);
        } else {
            Auth::login($model);
            return Redirect::route('pengaduan.index');
        }
    }

}
