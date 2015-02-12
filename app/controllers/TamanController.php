<?php

class TamanController extends BaseController {
    public function getIndex()
    {
        return View::make('taman.index',['daftar_taman' => Taman::paginate(10)]);
    }

    public function getCreate()
    {
        return View::make('taman.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(),Taman::$rules);
        if ($validator->fails()){
        } else {

        }
        return Redirect::route('taman.index');
    }

    public function getUpdate($id)
    {
        $model = Taman::findOrFail($id);
        return View::make('taman.update',['model' => $model->id]);
    } 

    public function postUpdate($id)
    {
        $model = Taman::findOrFail($id);
        $validator = Validator::make(Input::all(),Taman::$rules);
        if ($validator->fails()){
            return View::make('taman.update',['model' => $model->id]);
        } else {
            return Redirect::route('taman.index');
        }
    }

}
