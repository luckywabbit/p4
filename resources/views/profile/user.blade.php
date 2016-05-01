@extends('layouts.master')


@section('title')
    Developers SuperEST BestEST Friend Ever! | Random User Results
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
    <a href="/">Home</a>
@stop



@section('content')

    <h3>Here you go pal, {{ $userCount }} random users. Have a great day!</h3>

	{{--Loop through the $usersGenerated array - use $index to number random avatar image--}}
    @foreach ($usersGenerated as $index => $element)
        <div class="user col-md-3">
            <div class="userAvatar">
                <img src="http://loremflickr.com/100/100/cat?random={{$index}}" alt="User {{$index}}"/>
            </div>

            <div class="userInfo">
                <div class="userName"><span>Name: </span>{{$element['Name']}}</div>
                <div class="userEmail"><span>Email: </span>{{$element['Email']}}</div>
                <div class="userCity"><span>City: </span>{{$element['City']}}</div>
                <div class="userMemberSince"><span>Member Since: </span>{{$element['Member Since']}}</div>
            </div>
        </div>

    @endforeach

@stop
