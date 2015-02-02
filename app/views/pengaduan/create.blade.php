@extends('layouts.master')

@section('content')
<h1>Input laporan</h1>
<div class='col-xs-6'>
<form action='{{URL::route("pengaduan.post_create")}}' method='POST' enctype='multipart/form-data'>
	@include('pengaduan._form',['tamans'=>$tamans,'model'=>$model])
	<input type='submit' value='Lapor' class='btn btn-primary'/>
</form>
</div>
@stop