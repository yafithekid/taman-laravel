<input name='username' type='text' value='{{$model->username}}' class='form-control'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('username')}} @endif</span>

<input name='password' type='password' value='{{$model->password}}' class='form-control'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('password')}} @endif</span>

<input name='email' type='text' value='{{$model->email}}' class='form-control' />
<span style='color:red'>@if (isset($errors)) {{$errors->first('email')}} @endif </span>

<input name='nama' type='text' value='{{$model->nama}}' class='form-control' />
<span style='color:red'>@if (isset($errors)) {{$errors->first('nama')}} @endif </span>
<input type='submit' value='Simpan' class='btn btn-primary' />


