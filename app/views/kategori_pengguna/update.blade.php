@extends('layouts.master')
@section('content')
<h3>Ubah data pengguna</h3>
<br/>
    <form action='{{URL::route("kategori_pengguna.update.submit",['id'=>$model->id])}}' method='POST'>
        @include('kategori_pengguna._form',['model' => $model,'update' => true])
    </form>
@stop