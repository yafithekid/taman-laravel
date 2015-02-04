<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Pengguna extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pengguna';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = ['username','password','email','nama','kontak','id_kategori_pengguna'];

	public $timestamps = false;

	public function kategori()
	{
		return $this->hasOne('KategoriPengguna','id_kategori_pengguna','id');
	}

}
