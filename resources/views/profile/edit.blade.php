@extends('layouts.master')


@section('title')
    Online Servicing | Profile
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('nav')
	{{-- Additional navigation to help user navigate back Home --}}
       <ul class="nav navbar-nav navbar-left">
        <li > <a href="/product">Product Info</a> </li>
        <li> <a href="/shop">Shop</a> </li>
        <li> <a href="/profile">Profile</a> </li>
        <li > <a href="/logout">LogOut</a> </li>
      </ul>
@stop

@section('content')

    <h3>Profile Edit</h3>


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop