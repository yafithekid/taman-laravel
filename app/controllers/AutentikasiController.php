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
        $password = Input::get('password');

        $model = Pengguna::where('username','=',$username)->where('password','=',sha1($password))->first();
       //var_dump(DB::getQueryLog());exit();
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
