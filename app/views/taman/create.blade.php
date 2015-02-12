@extends('layouts.master')
@section('content')
<h3>Buat data taman</h3>
<br/>
    <form action='{{URL::route("taman.create.submit")}}' method='POST'>
        @include('taman._form',['model' => $model])
    </form>
@stop