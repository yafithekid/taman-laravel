<?php
class KategoriPengguna extends Eloquent {
    public $fillable = ['nama'];
    public $table= 'kategori_pengguna';
    
    public $timestamps = false;

    public static $rules = [
        'nama' => 'required'
    ];
}