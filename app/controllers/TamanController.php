<?php

class TamanController extends BaseController {
    public function getIndex()
    {
        return View::make('taman.index',['daftar_taman' => Taman::paginate(10)]);
    }

    public function getCreate()
    {
        return View::make('taman.create',['model' => new Taman()]);
    }

    public function postCreate()
    {
        $model = new Taman();
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),Taman::$rules);
        if ($validator->fails()){
            return View::make('taman.create',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('taman.index');
        }
    }

    public function getUpdate($id)
    {
        $model = Taman::findOrFail($id);
        return View::make('taman.update',['model' => $model]);
    } 

    public function postUpdate($id)
    {
        $model = Taman::findOrFail($id);
        $model->fill(Input::all());
        $validator = Validator::make(Input::all(),Taman::$rules);
        if ($validator->fails()){
            return View::make('taman.update',['model' => $model,'errors'=>$validator->messages()]);
        } else {
            $model->save();
            return Redirect::route('taman.index');
        }
    }

    public function getDelete($id)
    {
        $model = Taman::findOrFail($id);
        $model->delete();
        return Redirect::back();
    }

}
