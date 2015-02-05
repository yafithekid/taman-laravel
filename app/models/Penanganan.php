<?php

class Penanganan extends Eloquent {
    public $timestamps = false;

    public $fillable = [];
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
