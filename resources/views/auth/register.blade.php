@extends('layouts.master')

@section('content')

<p>Already have an account? <a href='/'>Login here...</a></p>

<h1>Register</h1>

@if(count($errors) > 0)
<ul class='errors'>
    @foreach ($errors->all() as $error)
    <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
    @endforeach
</ul>
@endif

<form method='POST' action='/register'>
    {!! csrf_field() !!}

    <div class="row">

        <div class='form-group col-md-3'>
            <div><label for='name'>Name</label></div>
            <div><input type='text' placeholder='Jane' name='name' id='name' value='{{ old(' name') }}'></div>
        </div>

        <div class='form-group col-md-3'>
            <div><label for='email'>Email</label></div>
            <div><input type='text' placeholder='example@example.com' name='email' id='email' value='{{ old(' email')
                }}'>
            </div>
        </div>


        <div class='form-group col-md-3'>
            <div><label for='user_cc'>Last 4 digits of Credit Card</label></div>
            <div><input type='number' placeholder='1111' min='1000' max='9999' name='user_cc' id='user_cc' value='{{ old(' user_cc')
                }}'>
            </div>
        </div>
    </div>

    <div class="row">
        <div class='form-group col-md-3'>
            <div><label for='password'>Password (min 6 characters)</label></div>
            <div><input type='password' placeholder='password' name='password' id='password'></div>
        </div>


        <div class='form-group col-md-3'>
            <div><label for='password_confirmation'>Confirm Password</label></div>
            <div><input type='password' name='password_confirmation' id='password_confirmation'></div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary'>Register</button>

</form>

@stop