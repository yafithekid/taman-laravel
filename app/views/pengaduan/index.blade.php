@extends('layouts.master')
<h1>Daftar Laporan</h1>
@section('content')
<table class='table table-striped'>
<tr>
	<th>Taman</th>
	<th>Pelapor</th>
	<th>Tanggal</th>
	<th>Status</th>
</tr>
	@foreach($models as $model)
		<tr>
			<td>{{$model->nama}}</td>
            <td>{{$model->email}}</td>
            <td>{{$model->tanggal}}</td>
            <td>
                <a href='{{URL::route('pengaduan.verifikasi',['id'=>$model->id]);}}'>
                    <span class='glyphicon glyphicon-pencil'></span>
                    @if ($model->verified)
                        valid
                    @else
                        belum valid
                    @endif
                </a>
            </td>
        </tr>
	@endforeach
</table>

@stop

