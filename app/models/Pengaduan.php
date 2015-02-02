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

	public $timestamps = false;

	public $fillable = ['email','gambar','tanggal','konten','selesai','kategori','id_taman','id_admin','verified'];	

}
