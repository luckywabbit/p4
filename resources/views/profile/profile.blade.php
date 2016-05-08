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
        <li > <a href="/">LogOut</a> </li>
      </ul>
@stop

@section('content')

    <h3>Profile</h3>
    <a href="/profile/edit">Edit Profile</a>

   @if ($user)

          
           
       @foreach ($user as $value)
            <p>{{ $value->name}}</p>
			<p>{{ $value->email}}</p>
            <p>{{ $value->user_product_id}}</p>
            <p>{{ $value->user_cc}}</p>
        @endforeach
           
           
         <a href="/profile/edit">delete profile</a> 
           
           
           
            {{--<p>{{ $user->name}}</p>
            <p>{{ $user->email}}</p>
            <p>{{ $user->product_id}}</p>
            --}}

    @endif

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop