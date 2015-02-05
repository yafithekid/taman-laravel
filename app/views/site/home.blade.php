@extends('layouts.master')
@section('content')
    <h1>Tamanku </h1>
    <a class='btn btn-primary' href='{{URL::route("pengaduan.create")}}'>Laporkan Taman</a>
    @foreach($models as $model)
        <div>
            <span>{{$model->email}}</span>
            <span>{{$model->tanggal}}</span>
            <span><img src="{{$model->getImageUrl()}}"/></span>

            <span>
                <a href='{{URL::route("pengaduan.view",['id'=>$model->id])}}'>Lihat</a>
            </span>
        </div>
    @endforeach
</table>

@stop


@stop