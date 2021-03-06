@extends('layouts.master')


@section('bodyClass')
login content
@stop


@section('content')

<p>Don't have an account? <a href='/register'>Register here...</a></p>

<h1>Login</h1>

@if(count($errors) > 0)
<ul class='errors'>
    @foreach ($errors->all() as $error)
    <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
    @endforeach
</ul>
@endif

<form method='POST' action='/'>

    {!! csrf_field() !!}

    <div class='form-group'>
        <div><label for='email'>Email</label></div>
        <div><input type='text' name='email' id='email' value='{{ old(' email') }}'></div>
    </div>

    <div class='form-group'>
        <div><label for='password'>Password</label></div>
        <div><input type='password' name='password' id='password' value='{{ old(' password') }}'></div>
    </div>

    <div class='form-group'>
        <input type='checkbox' name='remember' id='remember'>
        <label for='remember' class='checkboxLabel'>Remember me</label>
    </div>

    <button type='submit' class='btn btn-primary'>Login</button>

</form>
@stop