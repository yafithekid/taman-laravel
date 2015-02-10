<?php

class Penanganan extends Eloquent {
    public $timestamps = false;

    public $fillable = ['id_pengguna','id_pengaduan','isi','tanggal'];

    public static $rules = [
        'id_pengguna' => 'integer',
        'id_pengaduan' => 'integer',
        'isi' => 'required|max:500'
    ];

    public function pengaduan()
    {
        return $this->belongsTo('Pengaduan','id_pengaduan','id');
    }

    public function pengguna()
    {
        return $this->belongsTo('Pengguna','id_pengguna','id');
    }
    protected $table = 'penanganan';

}
