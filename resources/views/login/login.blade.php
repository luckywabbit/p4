@extends('layouts.master')


@section('title')
    Developers SuperEST BestEST Friend Ever!
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop


@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="intro">Hi, welcome to the Developers SuperEST BestEST Friend Ever!</p>
            <p>Need a few paragraphs of Lorem Ipsum or a few random user profiles to get your project started?</p>
            <p>Just tell me how many you need and... <span class="bam">BAM!</span></p>
            <p>Just like that... you got it pal!</p>
        </div>
        <!--Column End-->
    </div>
    <!--Row End-->
    
    <!--Validation Error Handling-->
    @if(count($errors) > 0)
        <div class="row">
    		<div class="col-md-12 alert alert-danger">Please choose the number of Lorem Ipsum Pargraphs or Random Users</div>  
        </div>
	@endif
    
    <div class="row">
        <div class="col-md-6">
            <div class="genLi">
                <h2>Lorem Ipsum Generator</h2>
                <form action="/li" method="post">
                    {{ csrf_field() }}
                    Number of Paragraphs (Min:1 - Max:20)<br>
                    <input type="number" name="liCount" placeholder="1-20" min="1" max="20">
                    <br>
                    <input type="submit" value="Get Lorem Ipsum">
                </form>
            </div>
        </div>
        <!--Column End-->
        <div class="col-md-6">
            <div class="genUser">
                <h2>Random User Generator</h2>
                <form action="/user" method="post">
                    {{ csrf_field() }}
                    Number of Random Users (Min:1 - Max: 20)<br>
                    <input type="number" name="userCount" placeholder="1-20" min="1" max="20">
                    <br>
                    <input type="submit" value="Get Random Users">
                </form>
            </div>
        </div>
        <!--Column End-->
    </div>
    <!--Row End-->
@stop

