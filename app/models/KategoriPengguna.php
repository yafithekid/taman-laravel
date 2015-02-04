<?php
class KategoriPengguna extends Eloquent {
    public $fillable = ['nama'];
    public $tablename = 'kategori_pengguna';
    
    public $timestamps = false;
}