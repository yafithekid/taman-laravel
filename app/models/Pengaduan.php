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
	


	public $fillable = ['email','gambar','tanggal','konten','selesai','kategori','id_taman','id_admin','verified'];	

	public static function imagePath() { return public_path().'/uploads/pengaduan'; }

	public function saveImage(){
		$extension = $this->file_gambar->getClientOriginalExtension();
		$this->file_gambar->move(Pengaduan::imagePath(),$this->id.".".$extension);
		$this->gambar = $this->id.".".$extension;
		$this->save();
	}
}
