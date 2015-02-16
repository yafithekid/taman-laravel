<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pengaduan extends Eloquent {
	const VERIFIED = 1;
	const UNVERIFIED = 0;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pengaduan';

	public $file_gambar;

	public $timestamps = false;
	
	/**
	 * yang bisa mass assignment
	 */
	public $fillable = ['judul','email','gambar','tanggal','konten','selesai','kategori','id_taman','id_kategori_pengaduan','verified'];	


	public static $rules = [
		'judul' => 'required | max:200',
		'email' => 'required | email | max:200',
		'id_taman' => 'required | numeric',
		'id_kategori_pengaduan' => 'required | numeric',
		'konten' => 'required | max:1000'
	];

	public function taman(){
		return $this->belongsTo('Taman','id_taman','id');
	}
	
	public function penanganan(){
		return $this->hasMany('Penanganan','id_pengaduan','id');
	}

	public function kategoriPengaduan(){
		return $this->belongsTo('KategoriPengaduan','id_kategori_pengaduan','id');
	}

	public static function imagePath() { return public_path().'/uploads/pengaduan'; }

	public function saveImage(){
		$extension = $this->file_gambar->getClientOriginalExtension();
		$this->file_gambar->move(Pengaduan::imagePath(),$this->id.".".$extension);
		$this->gambar = $this->id.".".$extension;
		$this->save();
	}

	public function getImageUrl()
	{
		return asset('uploads/pengaduan/'.$this->gambar);
	}

	public function saveImageFromBase64($base64_string){

	    $data = explode(',', $base64_string);
	    $extension = 'jpg';
	    File::put(Pengaduan::imagePath().'/'.$this->id.".".$extension,base64_decode($data[1]));
	    $this->gambar = $this->id.".jpg";
	    $this->save();
	}
}
