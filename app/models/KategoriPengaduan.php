<?php
class KategoriPengaduan extends Eloquent {
    public $fillable = ['nama'];
    public $table = 'kategori_pengaduan';
    
    public $timestamps = false;
}