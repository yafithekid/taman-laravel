@extends('layouts.master')
@section('content')
<h3>Buat data pengguna</h3>
<br/>
    <form action='{{URL::route("pengguna.create.submit")}}' method='POST'>
        @include('pengguna._form',['model' => $model])
    </form>
@stop