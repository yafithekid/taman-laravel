@extends('layouts.master')
@section('content')
<?php
    $daftar_kategori_pengaduan = KategoriPengaduan::all();
    $daftar_taman = Taman::all();
?>
        <h6>Laporkan Taman</h6>
            <div class="form-group">
                <span style='color:red'>{{$errors->first('nama')}}</span>
                <input name='judul' type="text" class="form-control" id="judul" placeholder="Judul" value='{{Input::old("judul")}}'>

                <span style='color:red'>{{$errors->first('email')}}</span>
                <input name='email' type="text" class="form-control" id="email" placeholder="Email (tidak akan dipublish)" value='{{Input::old("email")}}'>
                
                <span style='color:red'>{{$errors->first('id_taman')}}</span>
                <select name='id_taman' class="form-control" id="id_taman">
                    <option value='' disabled selected>-- Pilih lokasi taman --</option>
                @foreach($daftar_taman as $taman)
                    
                    <option value='{{$taman->id}}'>{{$taman->nama}}</option>
                @endforeach
                </select>

                <span style='color:red'>{{$errors->first('id_kategori_pengaduan')}}</span>
                <select name='id_kategori_pengaduan' class="form-control" id="id_kategori_pengaduan">
                    <option value='' disabled selected>-- Pilih kategori pengaduan --</option>
                @foreach($daftar_kategori_pengaduan as $kategori_pengaduan)
                    <option value='{{$kategori_pengaduan->id}}'>{{$kategori_pengaduan->nama}}</option>
                @endforeach
                </select>
                
                <input name='file_gambar' id='file_gambar' type="file" class="form-control" placeholder="Sisipkan foto">
                
                <span style='color:red'>{{$errors->first('konten')}}</span>
                <textarea name='konten' class="form-control" rows="5" id="konten" placeholder="Laporan" value='{{Input::old('konten')}}'></textarea>
                <button type="submit" class="col-lg-offset-4 sub btn btn-default" onclick='return submit()'>Kirim Laporan</button>
            </div>
@stop
@section('script')
@parent
<script type="text/javascript">
    function submit(){
        var data = new FormData();
        var inputFile = document.getElementById("file_gambar");
        data.append('file_gambar',inputFile.files[0]);
        data.append('judul',$("#judul").val());
        data.append('email',$("#email").val());
        data.append('id_taman',$("#id_taman").val());
        data.append('id_kategori_pengaduan',$("#id_kategori_pengaduan").val());
        data.append('konten',$("#konten").val());
        $.ajax({
            url: '<?=URL::route("api.pengaduan.create.submit");?>',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
                console.log(data);
            }
        });
        return false;
    }
    
</script>

@stop