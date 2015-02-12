@extends('layouts.master')
@section('content')
<h3>Ubah kategori pengaduan</h3>
<br/>
    <form action='{{URL::route("kategori_pengaduan.update.submit",['id'=>$model->id])}}' method='POST'>
        @include('kategori_pengaduan._form',['model' => $model,'update' => true])
    </form>
@stop