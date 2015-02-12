@extends('layouts.master')
@section('content')
<h3>Buat data kategori pengaduan</h3>
<br/>
    <form action='{{URL::route("kategori_pengaduan.create.submit")}}' method='POST'>
        @include('kategori_pengaduan._form',['model' => $model])
    </form>
@stop