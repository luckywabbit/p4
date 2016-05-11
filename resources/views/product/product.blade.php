@extends('layouts.master')


@section('title')
    Upsell  | Your Product
@stop

@section('bodyClass')
    product contentWithAside         

    
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

@stop

@section('contentWithAside')

    <h3 class="pageTitle">Your Product Info</h3>
    
    <div class="userWelcome">Congratulations on your <span> @foreach ($product as $value) {{ $value->product_name}} @endforeach Membership</span></div>
      
   <div class="prodDescript">   
 @if ($product)
        @foreach ($product as $value)
            <p>{{ $value->product_description}}</p>	
		@endforeach
 @endif
</div>
   
    
     <form method='POST' action='/product/edit'>
     
       @foreach ($user as $value)
 				<input type='hidden' name='id' value='{{$value->id}}'>
       @endforeach

    
     
     {{ csrf_field() }}

    
    <div class='row addonList'>
    <div class="addonHeader"><h3>Your Additional Options:</h3></div>
            <fieldset>
                
                @foreach($addons_for_checkboxes as $addon_id => $addon_name)
             
                
                	<div class="col-md-4 addonItem ">
                    <label>
                   
                    <input
                        type='checkbox'
                        value='{{ $addon_id }}'
                        name='addons[]'           
                        {{ (in_array($addon_id,$addons_of_user_for_checkboxes)) ? 'CHECKED' : '' }}
                    >
                  
                    <div class="addonName">{{$addon_name}}</div>
                    </label>
               	</div>
                @endforeach
            </fieldset>

            <button type="submit" class="btn btn-primary addonUpdate">Update Additional Options</button>
            
        </div>
    </form>
    
    
    
    
    
    {{--
   @if ($products)
        @foreach ($products as $product)
        	<p>{{ $product->name}}</p>
            <p>{{ $product->user_product_id}}</p>
        	
        
            <p>{{ $product->product_name}}</p>
            <p>{{ $product->product_price}}</p>
            <p>{{ $product->product_description}}</p>
        @endforeach
    @else
        <p>no product</p>
    @endif
    
    --}}
    
		
@stop




@section('aside')

<div>
<h1><a href="/shop">Have you tried the shop?</a></h1>
</div>

@stop





{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop