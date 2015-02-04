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
			return Redirect::route('pengaduan.view',['id'=>$id]);
		} else {
			return View::make('pengaduan.create',['model'=>$model,'tamans'=>Taman::all()]);
		}
	}

	public function anyIndex()
	{
		$models = Pengaduan::all();
		return View::make('pengaduan.index',['models'=>$models]);
	}

	public function anyView($id)
	{
		$model = Pengaduan::findOrFail($id);
		return View::make('pengaduan.view',['model'=>$model]);
	}

	public function anyVerifikasi($id)
	{
		$model = Pengaduan::findOrFail($id);
		$model->verified = !$model->verified;
		$model->save();
		return Redirect::route('pengaduan.index');
	}
}
