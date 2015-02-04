@extends('layouts.master')

@section('content')
<div class='col-xs-4 col-xs-offset-4'>
    <form action='{{URL::route('login.submit');}}' method='POST'>

        <div class='row'>
            <h1>Login</h1>
            @if (Session::has('login.error'))
                <span style='color:red'>{{Session::get('login.error')}}</span>
            @endif
        </div>

        <div class='row'>
            <label for='username'>Username</label>
            <input name='username' type='text' value='{{$model->username}}' class='form-control'/>
        </div>

        <div class='row'>
            <label for='password'>Password</label>
            <input name='password' type='password' value='{{$model->password}}' class='form-control'/>
        </div>
        <br/>
        
        <button type='submit'class='btn btn-primary'/>Login</button>
    </form>
</div>
@stop