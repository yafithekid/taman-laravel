@extends('layouts.master')
@section('content')
@if (count($daftar_kategori_pengaduan) == 0)
<i>Data kosong</i>
@endif
<a href='{{URL::route('kategori_pengaduan.create')}}' class='sub btn btn-success'>Tambah kategori pengaduan</a>
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
        @foreach($daftar_kategori_pengaduan as $kategori_pengaduan)
        <tr>
            <td>{{$kategori_pengaduan->id}}</td>
            <td>{{$kategori_pengaduan->nama}}</td>
            <td>
                <ul>
                    <li><a href='{{URL::route('kategori_pengaduan.update',['id'=>$kategori_pengaduan->id]);}}'><i class="fa fa-pencil"></i></a></li>
                    <!-- <li><a href='{{URL::route('pengguna.delete',['id'=>$kategori_pengaduan->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'><i class="fa fa-times"></i></a></li> -->
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{$daftar_kategori_pengaduan->links()}}
@stop