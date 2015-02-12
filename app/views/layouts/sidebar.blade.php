<!-- Blog Search Well -->
<?php
    $daftar_kategori_pengaduan = KategoriPengaduan::all();
    $daftar_taman = Taman::all();
?>

<h6>Laporkan Taman</h6>
<form action='{{URL::route("pengaduan.create.submit");}}' method='POST' enctype='multipart/form-data'>
    <div class="form-group">
        <span style='color:red'>{{$errors->first('judul')}}</span>
        <input name='judul' type="text" class="form-control" id="usr" placeholder="Judul" value='{{Input::old("judul")}}'>

        <span style='color:red'>{{$errors->first('email')}}</span>
        <input name='email' type="text" class="form-control" id="email" placeholder="Email (tidak akan dipublish)" value='{{Input::old("email")}}'>
        
        <span style='color:red'>{{$errors->first('id_taman')}}</span>
        <select name='id_taman' class="form-control" id="sel1">
            <option value='' disabled selected>-- Pilih lokasi taman --</option>
        @foreach($daftar_taman as $taman)
            
            <option value='{{$taman->id}}'>{{$taman->nama}}</option>
        @endforeach
        </select>

        <span style='color:red'>{{$errors->first('id_kategori_pengaduan')}}</span>
        <select name='id_kategori_pengaduan' class="form-control" id="sel2">
            <option value='' disabled selected>-- Pilih kategori pengaduan --</option>
        @foreach($daftar_kategori_pengaduan as $kategori_pengaduan)
            <option value='{{$kategori_pengaduan->id}}'>{{$kategori_pengaduan->nama}}</option>
        @endforeach
        </select>
        
        <input name='file_gambar' type="file" class="form-control" placeholder="Sisipkan foto">
        
        <span style='color:red'>{{$errors->first('konten')}}</span>
        <textarea name='konten' class="form-control" rows="5" id="comment" placeholder="Laporan" value='{{Input::old('konten')}}'></textarea>
        <button type="submit" class="col-lg-offset-4 sub btn btn-default">Kirim laporan</button>
    </div>
</form>
    