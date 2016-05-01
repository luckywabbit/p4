@extends('layouts.master')


@section('title')
    Online Servicing | Products
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

    <h3>Product Info</h3>
    <a href="/product/edit">Edit Product</a>
    

    {{-- @if ($lorem)
        @foreach ($lorem as $value)
            <p>{{ $value}}</p>
        @endforeach
    @else
        <p>please select number of paragraphs</p>
    @endif
    --}}

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop