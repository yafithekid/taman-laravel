<?php


class Taman extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'taman';

	public $timestamps = false;

	public $fillable = ['nama','alamat','koordinat_x','koordinat_y'];

    public static $rules = [
        'nama' => 'required | max:200',
        'alamat' => 'required | max:200',
        'koordinat_x' => 'numeric',
        'koordinat_y' => 'numeric'
    ];
}
