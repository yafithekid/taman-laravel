<label for='id_taman'>Nama Taman</label>
<select name='id_taman' class='form-control'>
	@foreach($tamans as $taman)
		<option value='{{$taman->id}}'>{{$taman->nama}}</option>
	@endforeach
</select>

<label for='email'>Email</label>
<input name='email' type='text' value='{{$model->email}}' class='form-control'/>

<label for='tanggal'>Tanggal</label>
<input name='tanggal' type='text' value='{{$model->tanggal}}' class='form-control' id='datetimepicker'/>

<label for='file_gambar'>Gambar</label>
<input name='file_gambar' type='file' class='form-control'/>

<label for='kategori'>Kategori</label>
<input name='kategori' type='text' value='{{$model->kategori}}' class='form-control'/>

<label for='konten'>Isi Laporan</label>
<textarea name='konten' class='form-control'>{{$model->konten}}</textarea>


@section('script')
	@parent
	<script>

	$(document).ready(function(){
		$("#datetimepicker").datetimepicker({format:'Y-m-d',timepicker:false});
	});
	</script>
@stop
