@extends('layouts.master')
@section('content')
@if (count($daftar_pengguna) == 0)
<i>Data kosong</i>
@endif
<a href='{{URL::route('pengguna.create')}}' class='sub btn btn-success'>Pengguna baru</a>
<span class='pull-right'><a href='{{URL::route('kategori_pengguna.index')}}' class='sub btn btn-success'>Kategori Pengguna</a></span>
<br/><br/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Kategori</th>
            <th>Pengaturan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; ?>
        @foreach($daftar_pengguna as $pengguna)
        <tr>
            <td>{{$pengguna->username}}</td>
            <td>{{$pengguna->email}}</td>
            <td>{{$pengguna->nama}}</td>
            <td>{{$pengguna->kontak}}</td>
            <td>{{$pengguna->kategoriPengguna->nama}}</td>
            <td>
                <ul>
                    <li><a href='{{URL::route('pengguna.update',['id'=>$pengguna->id]);}}'><i class="fa fa-pencil"></i></a></li>
                    <li><a href='{{URL::route('pengguna.delete',['id'=>$pengguna->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'><i class="fa fa-times"></i></a></li>
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$daftar_pengguna->links()}}
@stop