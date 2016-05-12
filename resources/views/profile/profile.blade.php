@extends('layouts.master')


@section('title')
Online Servicing | Profile
@stop

@section('bodyClass')
profile contentWithAside
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('nav')
{{-- Addi to Nav Section --}}

@stop

@section('contentWithAside')

<h3 class="pageTitle">Profile</h3>


<div class="userProfile">

	<h3>Your registered info:</h3>
    @if ($user)
    @foreach ($user as $value)
    <div class="userName"><span>User Name: </span>{{ $value->name}}</div>
    <div class="userEmail"><span>User Email: </span>{{ $value->email}}</div>
    <div class="userCC"><span>Credit Card (last 4 digits): </span>{{ $value->user_cc}}</div>
    @endforeach
    @endif


    @if ($creditcards )
    @foreach ($creditcards as $creditcard)
    <div class="userCC"><span>Additional Credit Card: </span>{{ $creditcard ->user_cc}} <a class="deleteCC"
            href="/profile/deleteCC/{{$creditcard ->user_cc}}">Delete Card {{ $creditcard ->user_cc}}</a></div>

    @endforeach
    @endif


    <form method='POST' action='/profile/editCC'>
        {!! csrf_field() !!}

        <div class="addCC">

            <h3>Add Addditional Credit Card</h3>
            
            @if(count($errors) > 0)
                <ul class='errors'>
                    @foreach ($errors->all() as $error)
                    <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class='form-group'>
                <div><label for='new_user_cc'>Last 4 digits of Additional Credit Card</label></div>
                <div><input type='number' placeholder='1234' min='1000' max='9999' name='new_user_cc' id='new_user_cc'
                            value='{{ old(' user_cc') }}'>
                </div>
            </div>
        </div>


        <button type='submit' class='btn btn-primary'>Add Card</button>

    </form>


</div>



@stop

@section('aside')


<div>
    <a class="upsell" href="/shop">Have you tried the shop?</a>
</div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop