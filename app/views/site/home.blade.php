@extends('layouts.master')
@section('content')
    <h1>Tamanku </h1>
    <a class='btn btn-primary' href='{{URL::route("pengaduan.create")}}'>Laporkan Taman</a>
@stop