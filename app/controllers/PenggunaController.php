<?php

class PenggunaController extends BaseController {
    public function getIndex()
    {
        return View::make('pengguna.index',['daftar_pengguna' => Pengguna::paginate(10)]);
    }

    public function getCreate()
    {
        return View::make('pengguna.create',['model' => new Pengguna()]);
    }

    public function postCreate()
    {
        $model = new Pengguna();
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),Pengguna::$rules);
        if ($validator->fails()){
            $model->password = '';
            return View::make('pengguna.create',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->password = sha1($model->password);
            $model->save();
            return Redirect::route('pengguna.index');
        }
    }

    public function getUpdate($id)
    {
        $model = Pengguna::findOrFail($id);
        $model->password = '';
        return View::make('pengguna.update',['model' => $model]);
    } 

    public function postUpdate($id)
    {
        $model = Pengguna::findOrFail($id);
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),Pengguna::$update_rules);
        if ($validator->fails()){
            $model->password = '';
            return View::make('pengguna.update',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->password = sha1($model->password);
            $model->save();
            return Redirect::route('pengguna.index');
        }
    }

    public function getDelete($id)
    {
        $model = Pengguna::findOrFail($id);
        $model->delete();
        return Redirect::back();
    }

}
