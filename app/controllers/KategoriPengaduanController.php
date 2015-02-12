<?php
class KategoriPengaduanController extends BaseController {
    public function getIndex(){
        return View::make('kategori_pengaduan.index',['daftar_kategori_pengaduan' => KategoriPengaduan::paginate(10)]);
    }

    public function getCreate(){
        return View::make('kategori_pengaduan.create',['model' => new KategoriPengaduan]);
    }

    public function postCreate(){
        $model = new KategoriPengaduan();
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),KategoriPengaduan::$rules);
        if ($validator->fails()){
            return View::make('kategori_pengaduan.create',['model'=>$model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('kategori_pengaduan.index');
        }
    }

    public function getUpdate($id)
    {
        $model = KategoriPengaduan::findOrFail($id);
        return View::make('kategori_pengaduan.update',['model' => $model]);
    } 

    public function postUpdate($id)
    {
        $model = KategoriPengaduan::findOrFail($id);
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),KategoriPengaduan::$rules);
        if ($validator->fails()){
            return View::make('kategori_pengaduan.update',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('kategori_pengaduan.index');
        }
    }
}