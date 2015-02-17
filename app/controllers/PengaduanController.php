<?php

class PengaduanController extends BaseController {

	public function getHome()
	{
		$models = Pengaduan::where('verified','=','1')->orderBy('tanggal','DESC')->paginate(6);
		
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
			Session::flash('notification','Laporan berhasil disimpan dan menunggu verifikasi');
			return Redirect::back();
			//return Redirect::route('pengaduan.view',['id'=>$model->id]);
		} else {
			return Redirect::back()->withErrors($validator)->withInput();
		}
	}

	public function anyIndex()
	{
		$models = Pengaduan::orderBy('tanggal','DESC')->paginate(5);
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
		if ($model->delete())
			Session::flash('notification','Data berhasil dihapus');
		return Redirect::back();
	}

	public function anyVerifikasi($id,$verified)
	{
		$model = Pengaduan::findOrFail($id);
		if ($verified == 0 || $verified == 1){
			$model->verified = $verified;
			if($model->save())
				Session::flash('notification','Status verifikasi berhasil diubah');
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
		$id_pengguna = Input::get('id_pengguna');
		$pengguna = Pengguna::findOrFail($id_pengguna);


		// I'm creating an array with user's info but most likely you can use $user->email or pass $user object to closure later
		$user = array(
			'email'=> $pengguna->email,
			'name'=> $pengguna->nama
		);

		// the data that will be passed into the mail view blade template
		$data = array(
			'model' => $model
		);

		// use Mail::send function to send email passing the data and using the $user variable in the closure
		Mail::send('pengaduan.email', $data, function($message) use ($user,$model)
		{
		  $message->from('if3250.p1.kel1@gmail.com', 'Admin Tamanku');
		  $message->to($user['email'], $user['name'])->subject('Pengaduan '.$model->judul);
		});
		Session::flash('notification','Email berhasil dikirimkan ke '.$model->email);
		return Redirect::back();
	}

	public function getPdf($id)
	{
		$model = Pengaduan::findOrFail($id);
		PDF::SetTitle('Hello World');

		PDF::AddPage();
		//$result = "<h1>'".$model->judul."'</h1>";
		PDF::WriteHtml("<center><b>".$model->judul."</b></center>");
		PDF::Image($model->getImageUrl(),20,35,50,50);
		PDF::SetY(90);
		PDF::Write(0,$model->konten);
		PDF::Write(0,"\n\nPenanganan\n\n");
		foreach($model->penanganan as $penanganan){
			PDF::Write(0,$penanganan->pengguna->nama."(".$penanganan->pengguna->kategoriPengguna->nama.")");
			PDF::Write(0,"\n".$penanganan->isi."\n\n");
		}
		//PDF::Image($model->getImagePath());
		$result = "<img src='".$model->getImageUrl()."'/>";
		$result.= "<table class='table table-striped'>";
		$result.= "<tr>";
		$result.= "<td></td>";
		$result .= "</tr>";
		$result.= $model->konten;
		$result.= "hello world";

		PDF::Output('hello_world.pdf');
	}
}
