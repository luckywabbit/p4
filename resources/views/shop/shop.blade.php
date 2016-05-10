@extends('layouts.master')


@section('title')
    Upsell | Shop
@stop

@section('bodyClass')
    shop content
@stop



{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('nav')
	{{-- Add to Nav Section --}}
@stop

@section('content')

    <h3 class="pageTitle">Shop</h3>

<div class="container-fluid">
	<div class="row">
    
    
    
		
		


   @if ($products)
        @foreach ($products as $product)
        	<div class="col-md-3">
            	<div class="prodItem"
                <p class="prodName">{{ $product->product_name}}</p>
                <p class="prodPrice">{{ $product->product_price}}</p>
                <p class="prodDescr">{{ $product->product_description}}</p>
                
                <a href="/shop/buy/{{ $product->id}}" id="{{ $product->id}}" class="btnBuy">Buy {{ $product->product_name}}</a>
                </div> <!--End ProdItem-->
                
            </div><!--End Col-->
        @endforeach
    @endif



	</div>
</div>









@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop