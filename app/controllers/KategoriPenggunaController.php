<?php
class KategoriPenggunaController extends BaseController {
    public function getIndex(){
        return View::make('kategori_pengguna.index',['daftar_kategori_pengguna' => KategoriPengguna::paginate(10)]);
    }

    public function getCreate(){
        return View::make('kategori_pengguna.create',['model' => new KategoriPengguna]);
    }

    public function postCreate(){
        $model = new KategoriPengguna();
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),KategoriPengguna::$rules);
        if ($validator->fails()){
            return View::make('kategori_pengguna.create',['model'=>$model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('kategori_pengguna.index');
        }
    }

    public function getUpdate($id)
    {
        $model = KategoriPengguna::findOrFail($id);
        return View::make('kategori_pengguna.update',['model' => $model]);
    } 

    public function postUpdate($id)
    {
        $model = KategoriPengguna::findOrFail($id);
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),KategoriPengguna::$rules);
        if ($validator->fails()){
            return View::make('kategori_pengguna.update',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('kategori_pengguna.index');
        }
    }
}