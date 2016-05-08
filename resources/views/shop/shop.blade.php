@extends('layouts.master')


@section('title')
    Online Servicing | Shop
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

    <h3>Shop</h3>

   @if ($products)
        @foreach ($products as $product)
            <p>{{ $product->product_name}}</p>
            <p>{{ $product->product_price}}</p>
            <p>{{ $product->product_description}}</p>
            
            <a href="/shop/buy/{{ $product->id}}" id="{{ $product->id}}">Buy {{ $product->product_name}}</a>
            
        @endforeach
    @else
        <p>please select number of paragraphs</p>
    @endif


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop