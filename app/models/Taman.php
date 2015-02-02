<?php


class Taman extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'taman';

	public $timestamps = false;

	public $fillable = ['nama','alamat','koordinat_x','koordinat_y','gambar'];

}
