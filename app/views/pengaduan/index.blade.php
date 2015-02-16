@extends('layouts.master')
@section('content')
@if (!Auth::guest())
<a href='{{URL::route("kategori_pengaduan.index")}}' class='sub btn btn-primary'>Lihat Kategori Pengaduan</a>
@endif
<br/>
<br/>
@if (count($models) == 0)
<i>Data kosong</i>
@endif
@foreach($models as $model)
<div class="row">
    <div class="col-md-1 text-center">
        </p>
        <p>{{$model->tanggal}}</p>
    </div>
    <div class="col-md-4">
        <a href="{{URL::route('pengaduan.view',['id'=>$model->id])}}">
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
        <p><div class="category"><i class="cat fa fa-bookmark"></i>{{$model->taman->nama}} - {{$model->kategori_pengaduan->nama}}</a></div>
        </p>
        <p>
            
        </p>
        </div>
        <p style='word-break: break-all'>{{substr(HTML::entities($model->konten),0,300)}} ...</p>
        <div class='col-xs-5'>
            <select onchange='window.location.href = this.value' class='form-control'>
                <option value='<?=URL::route("pengaduan.verifikasi",['id'=>$model->id,'verified'=>0]);?>' @if(!$model->verified) selected @endif >
                    Belum diverifikasi
                </option>
                <option value='<?=URL::route("pengaduan.verifikasi",['id'=>$model->id,'verified'=>1]);?>' @if($model->verified) selected @endif>
                    Sudah diverifikasi
                </option>
            </select>
            </div>
    </div>

</div>

<hr>
@endforeach

{{$models->links()}}
@stop

