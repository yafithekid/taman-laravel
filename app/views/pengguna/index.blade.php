@extends('layouts.master')
@section('content')
<a href='{{URL::route('pengguna.create')}}'>Pengguna baru</a>
<table class='table table-striped'>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach($daftar_pengguna as $pengguna)
    <tr>
        <td>{{$pengguna->nama}}</td>
        <td>{{$pengguna->alamat}}</td>
        <td>
            <a href='{{URL::route('pengguna.update',['id'=>$pengguna->id]);}}'>Ubah</a>
            <a href='{{URL::route('pengguna.delete',['id'=>$pengguna->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'>Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{$daftar_pengguna->links()}}
@stop