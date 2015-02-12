<input name='nama' type='text' value='{{Input::old('nama',$model->nama)}}' class='form-control'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('nama')}} @endif</span>

<input name='alamat' type='text' value='{{Input::old('alamat',$model->alamat)}}' class='form-control'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('alamat')}} @endif</span>

<input type='submit' value='Simpan' class='btn btn-primary' />


