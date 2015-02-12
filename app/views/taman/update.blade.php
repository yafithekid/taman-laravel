@extends('layouts.master')
@section('content')
<h3>Ubah data taman</h3>
<br/>
    <form action='{{URL::route("taman.update.submit",['id'=>$model->id])}}' method='POST'>
        @include('taman._form',['model' => $model])
    </form>
@stop