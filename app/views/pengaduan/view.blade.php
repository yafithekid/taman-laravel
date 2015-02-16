@extends('layouts.master')
<?php
    $daftar_pengguna = Pengguna::all();
?>
@section('content')
    <div class='col-md-12'>
        <div class='col-md-4'>
            {{HTML::image($model->getImageUrl(),'',['width'=>200,'height'=>200]);}}
        </div>
        <div class='col-md-8'>
            <p>{{$model->tanggal}}</p>
                <h3>
                    <a href="#">{{$model->judul}}</a>
                </h3>
                @if (!Auth::guest())
                <div>
                    <a href='{{URL::route('pengaduan.pdf',['id'=>$model->id])}}' class='sub btn btn-success' target='_blank'>Cetak Laporan</a>
                </div>
                @endif
                <div class="conf">
                <p><div class="category"><i class="cat fa fa-bookmark"></i> {{$model->kategoriPengaduan->nama}}</a></div>
                </p> 
                <p><div class="statrep"><i class="star fa fa-star"></i>@if ($model->verified) Sudah diverifikasi @else belum diverifikasi @endif</div></a>
                </p>
                </div>
                <br />
                <p>{{HTML::entities($model->konten)}}</p>

                @if (!Auth::guest())
                <b>Kirimkan pengaduan</b>
                <div class='col-xs-12'>
                    <form method='get' action='{{URL::route('pengaduan.email',['id' => $model->id])}}'>
                    <div class='col-xs-10'>
                        
                        <select name='id_pengguna' class='form-control'>
                            @foreach($daftar_pengguna as $pengguna)
                            <option value='{{$pengguna->id}}'>{{$pengguna->kategoriPengguna->nama}} - {{$pengguna->nama}}</option>
                            @endforeach
                        </select>
                        
                    
                    </div>
                    <div class='col-xs-2'>
                        <input type='submit' class='publish btn btn-primary' value='Email' />
                    </div>
                    </form>
                </div>
                
                @endif
                <br/>

                <b>Daftar Penanganan</b>
                @if (count($model->penanganan) == 0)
                    <i>Belum ada penanganan</i>
                @else
                @foreach($model->penanganan as $penanganan)
                    <div>
                        <p>{{$penanganan->pengguna->kategoriPengguna->nama}}: {{$penanganan->pengguna->nama}}</p>
                        <p style='word-break: break-all'>{{HTML::entities($penanganan->isi)}}</p>
                        <hr/>
                    </div>
                @endforeach
                @endif
                <hr/>
                <div class='row'>
                    <form action='{{URL::route("pengaduan.penanganan.create.submit",["id"=>$model->id])}}' method='POST'>
                        @include('pengaduan._penanganan');
                    </form>
                </div>
            </div>


    </div>
    <hr/>
    <br>
	

@stop