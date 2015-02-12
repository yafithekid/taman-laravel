@extends('layouts.master')
@section('content')
<a href='{{URL::route('taman.create')}}' class='sub btn btn-success'>Taman baru</a>
<br/><br/><br/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Taman</th>
            <th>Lokasi</th>
            <th>Pengaturan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; ?>
        @foreach($daftar_taman as $taman)
        <tr>
            <td>{{++$i;}}</td>
            <td>{{$taman->nama}}</td>
            <td>{{$taman->alamat}}</td>
            <td>
                <ul>
                    <li><a href='{{URL::route('taman.update',['id'=>$taman->id]);}}'><i class="fa fa-pencil"></i></a></li>
                    <li><a href='{{URL::route('taman.delete',['id'=>$taman->id]);}}' onclick='return confirm("Anda yakin ingin menghapus data ini?")'><i class="fa fa-times"></i></a></li>
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$daftar_taman->links()}}
@stop