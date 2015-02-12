@extends('layouts.master')
@section('content')
<a href='{{URL::route('taman.create')}}'>Taman baru</a>
<table class='table table-striped'>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach($daftar_taman as $taman)
    <tr>
        <td>{{$taman->nama}}</td>
        <td>{{$taman->alamat}}</td>
        <td>
            <a href='{{URL::route('taman.update',['id'=>$taman->id]);}}'>Ubah</a>
            <a href='{{URL::route('taman.delete',['id'=>$taman->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'>Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{$daftar_taman->links()}}
@stop