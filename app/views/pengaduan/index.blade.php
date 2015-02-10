@extends('layouts.master')
@section('content')
@foreach($models as $model)
<div class="row">
    <div class="col-md-1 text-center">
        </p>
        <p>{{$model->tanggal}}</p>
    </div>
    <div class="col-md-4">
        <a href="blog-post.html">
            <img class="img-responsive img-hover" width='600px' height='600px' src="{{$model->getImageUrl()}}" alt="">
        </a>
    </div>
    <div class="col-md-7">
        <div class="col-md-offset-10">
            <ul class="delshare">
                <li><a href="{{URL::route('pengaduan.delete',['id'=>$model->id])}}" onclick="return confirm('Anda yakin ingin menghapus pengaduan ini?')"><i class="remove fa fa-times"></a></i></li>
                <!-- Share buat di inbox
                <li><a href="#"><i class="share fa fa-share"></a></i></li>
                -->
            </ul>
        </div>
        <h3>
            <a href="{{URL::route('pengaduan.view',['id'=>$model->id])}}">{{$model->judul}}</a>
        </h3>
        <div class="conf">
        <p><div class="category"><i class="cat fa fa-bookmark"></i> {{$model->kategori_pengaduan->nama}}</a></div>
        </p>
        <p><div class="statrep"><i class="star fa fa-star"></i>Dalam proses penanganan </div></a>
        </p>
        </div>
        <br />
        <p>{{$model->konten}}</p>
    </div>

</div>

<hr>
@endforeach

@stop

