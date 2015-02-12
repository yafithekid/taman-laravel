@extends('layouts.master')
@section('content')
<h3>Buat data kategori pengguna</h3>
<br/>
    <form action='{{URL::route("kategori_pengguna.create.submit")}}' method='POST'>
        @include('kategori_pengguna._form',['model' => $model])
    </form>
@stop