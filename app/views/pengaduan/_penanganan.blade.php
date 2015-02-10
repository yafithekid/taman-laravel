@if(!Auth::guest())
<h5 style='color:black;'>Tambah penanganan sebagai: {{Auth::user()->nama}}</h5>
<input name='id_pengguna' value='{{Auth::user()->id}}' class='form-control' type='hidden'/>
<input name='id_pengaduan' value='{{$model->id}}' class='form-control'type='hidden'/>
<span style='color:red'>{{$errors->first('isi')}}</span>
<textarea name='isi' value='{{Input::old('isi')}}' class='form-control' placeholder='isi penanganan (max 500 karakter)'></textarea>
<br/>
<button class='sub btn btn-primary'>Kirim</button>
@endif
