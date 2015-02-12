@extends('layouts.master')
@section('content')
<h3>Ubah data pengguna</h3>
<br/>
    <form action='{{URL::route("pengguna.update.submit",['id'=>$model->id])}}' method='POST'>
        @include('pengguna._form',['model' => $model,'update' => true])
    </form>
@stop