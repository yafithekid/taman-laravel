<?php

class PengaduanController extends BaseController {

	public function getHome()
	{
		$models = Pengaduan::paginate(6);
		return View::make('pengaduan.home',['models' => $models]);
	}

	public function getCreate()
	{
		return View::make('pengaduan.create',['model' => new Pengaduan(),'tamans'=>Taman::all()]);
	}

	public function postCreate()
	{
		$model = new Pengaduan();
		$validator = Validator::make(Input::all(),Pengaduan::$rules);
		if (!$validator->fails()){	
			$model->fill(Input::all());
			$model->save();
			if (Input::hasFile('file_gambar')){
				$model->file_gambar = Input::file('file_gambar');
				$model->saveImage();
			}
			return Redirect::route('pengaduan.view',['id'=>$model->id]);
		} else {
			return Redirect::back()->withErrors($validator)->withInput();
		}
	}

	public function anyIndex()
	{
		$models = Pengaduan::paginate(5);
		return View::make('pengaduan.index',['models'=>$models]);
	}

	public function anyView($id)
	{
		$model = Pengaduan::findOrFail($id);
		return View::make('pengaduan.view',['model'=>$model]);
	}

	public function anyDelete($id)
	{
		$model = Pengaduan::findOrFail($id);
		$model->delete();
		return Redirect::back();
	}

	public function anyVerifikasi($id,$verified)
	{
		$model = Pengaduan::findOrFail($id);
		if ($verified == 0 || $verified == 1){
			$model->verified = $verified;
			$model->save();
		}
		
		return Redirect::back();
	}



	public function postPenanganan($id)
	{
		$pengaduan = Pengaduan::findOrFail($id);
		$penanganan = new Penanganan();
		$penanganan->id_pengguna = Auth::user()->id;
		$penanganan->id_pengaduan = $pengaduan->id;
		$penanganan->isi = Input::get('isi');

		$validator = Validator::make(Input::all(),Penanganan::$rules);
		if (!$validator->fails()){
			$penanganan->save();
			return Redirect::route('pengaduan.view',['id'=>$id]);
		} else {
			return Redirect::back()->withInput()->withErrors($validator);
		}
	}

	public function getEmail($id)
	{
		$model = Pengaduan::findOrFail($id);

		// I'm creating an array with user's info but most likely you can use $user->email or pass $user object to closure later
		$user = array(
			'email'=> 'yafithekid212@gmail.com',
			'name'=>'Muhammad Yafi'
		);

		// the data that will be passed into the mail view blade template
		$data = array(
			'model' => $model
		);

		// use Mail::send function to send email passing the data and using the $user variable in the closure
		Mail::send('pengaduan.email', $data, function($message) use ($user)
		{
		  $message->from('if3250.p1.kel1', 'Admin Tamanku');
		  $message->to($user['email'], $user['name'])->subject('Pengaduan '.$model->judul);
		});
	}
}
