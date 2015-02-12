
<input name='nama' type='text' value='{{$model->nama}}' class='form-control' placeholder='nama'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('nama')}} @endif</span>
<center>
    <input type='submit' value='Simpan' class='sub btn btn-primary' />
</center>


