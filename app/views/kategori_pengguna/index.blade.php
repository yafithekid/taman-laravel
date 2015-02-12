@extends('layouts.master')
@section('content')
@if (count($daftar_kategori_pengguna) == 0)
<i>Data kosong</i>
@endif
<a href='{{URL::route('kategori_pengguna.create')}}' class='sub btn btn-success'>Tambah kategori pengguna</a>
<br/><br/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Pengaturan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; ?>
        @foreach($daftar_kategori_pengguna as $kategori_pengguna)
        <tr>
            <td>{{$kategori_pengguna->id}}</td>
            <td>{{$kategori_pengguna->nama}}</td>
            <td>
                <ul>
                    <li><a href='{{URL::route('kategori_pengguna.update',['id'=>$kategori_pengguna->id]);}}'><i class="fa fa-pencil"></i></a></li>
                    <!-- <li><a href='{{URL::route('pengguna.delete',['id'=>$kategori_pengguna->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'><i class="fa fa-times"></i></a></li> -->
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$daftar_kategori_pengguna->links()}}
@stop