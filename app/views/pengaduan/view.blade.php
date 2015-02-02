@extends('layouts.master')

@section('content')
	@foreach($models as $model)
		<div>
			{{$model->email}}
			{{$model->konten}}
		</div>
	@endforeach
@stop