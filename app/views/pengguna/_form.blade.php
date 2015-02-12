<?php
    $daftar_kategori_pengguna = KategoriPengguna::all();
?>
<input name='username' type='text' value='{{$model->username}}' class='form-control' @if(isset($update)) readonly @endif placeholder='username'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('username')}} @endif</span>

<input name='password' type='password' value='{{$model->password}}' class='form-control' placeholder='password'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('password')}} @endif</span>

<input name='email' type='text' value='{{$model->email}}' class='form-control' placeholder='email' />
<span style='color:red'>@if (isset($errors)) {{$errors->first('email')}} @endif </span>

<input name='nama' type='text' value='{{$model->nama}}' class='form-control' placeholder='nama'/>
<span style='color:red'>@if (isset($errors)) {{$errors->first('nama')}} @endif </span>


<select name='id_kategori_pengguna' class='form-control'>
    <option disabled @if ($model->id_kategori_pengguna == null) selected @endif >-- Pilih Kategori Penguna -- </option>
@foreach($daftar_kategori_pengguna as $kategori_pengguna)
    <option value='{{$kategori_pengguna->id}}' @if ($model->id_kategori_pengguna == $kategori_pengguna->id) selected @endif >{{$kategori_pengguna->nama}}</option>
@endforeach
</select>
<center>
    <input type='submit' value='Simpan' class='sub btn btn-primary' />
</center>


