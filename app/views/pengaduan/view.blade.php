@extends('layouts.master')

@section('content')
	<div>
        <h1>Penanganan</h1>
    </div>
    <div class='col-xs-4'>
        <form action='{{URL::route("pengaduan.penanganan.create.submit",["id"=>$model->id])}}' method='POST'>
            @include('pengaduan._penanganan');
        </form>
    </div>
    @foreach($model->penanganan as $penanganan)
        <div>
            <span>Oleh: {{$penanganan->pengguna->nama}}</span>
            <br/>
            <span>{{$penanganan->isi}}</span>
        </div>
    @endforeach
@stop