@extends('layouts.master')

@section('content')
    <h1>{{$model->judul}}</h1>
    <h5 style='color:black;'>Dilaporkan pada {{$model->tanggal}}</h5>
    <div class='col-md-12'>
        <div class='col-md-4'>
            {{HTML::image($model->getImageUrl(),'',['width'=>200,'height'=>200]);}}
        </div>
        <div class='col-md-8'>
            <p style='word-break: break-all'>{{HTML::entities($model->konten)}}</p>
        </div>
    </div>
    <hr/>
    <br>
	<div>
        <b>Penanganan</b>
    </div>
    @if (count($model->penanganan) == 0)
        <i>Belum ada penanganan</i>
    @else
    @foreach($model->penanganan as $penanganan)
        <div>
            {{$penanganan->pengguna->kategoriPengguna->nama}}
            <span>Oleh: {{$penanganan->pengguna->nama}}</span>
            <br/>
            <p style='word-break: break-all'>{{HTML::entities($penanganan->isi)}}</p>
        </div>
    @endforeach
    @endif
    <hr/>   
    <div class='row'>
        <form action='{{URL::route("pengaduan.penanganan.create.submit",["id"=>$model->id])}}' method='POST'>
            @include('pengaduan._penanganan');
        </form>
    </div>

@stop