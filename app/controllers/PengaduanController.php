<?php

class PengaduanController extends BaseController {

	public function getCreate()
	{
		return View::make('pengaduan.create',['model' => new Pengaduan(),'tamans'=>Taman::all()]);
	}

	public function postCreate()
	{
		$model = new Pengaduan();
		$model->fill(Input::all());
		if ($model->save()){
			Session::flash('success','Data berhasil disimpan');
			return Redirect::route('pengaduan.index');
		} else {
			return View::make('pengaduan.create',['model'=>$model,'tamans'=>Taman::all()]);
		}
	}

	public function getIndex()
	{
		$models = Pengaduan::all();
		return View::make('pengaduan.index',['models'=>$model]);
	}

	public function anyView($id)
	{
		$model = Pengaduan::findOrFail($id);
		return View::make('pengaduan.view',['model'=>$model]);
	}
}