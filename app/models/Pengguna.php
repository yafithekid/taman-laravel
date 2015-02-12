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

	public static $rules = [
		'username' => 'unique:pengguna| required',
		'password' => 'required',
		'email' => 'required | email',
		'nama' => 'required',
		'kontak' => 'required',
		'id_kategori_pengguna' => 'integer'
	];

	public static $update_rules = [
		'username' => 'required',
		'password' => 'required',
		'email' => 'required | email',
		'nama' => 'required',
		'kontak' => 'required',
		'id_kategori_pengguna' => 'integer'
	];
	
	public function kategoriPengguna()
	{
		return $this->belongsTo('KategoriPengguna','id_kategori_pengguna','id');
	}

}
