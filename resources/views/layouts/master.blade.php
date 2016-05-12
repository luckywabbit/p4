<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Online Servicing' --}}
        @yield('title','Online Servicing')
    </title>

    <meta charset='utf-8'>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw=="
          crossorigin="anonymous">


    <link href="/css/bs_JustGrid.css" type='text/css' rel='stylesheet'>


    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the
    <head> --}}
        @yield('head')

    </head>
<body class="@if(Auth::check()){{$bodyProductClass}} 
						@foreach ($bodyAddonsClasses as $value)
                        	{{ $value }}
                        @endforeach 
                      @endif  
                        @yield('bodyClass')">
                        

 @if(Session::get('message') != null)
     <div class='flash_message'>{{ Session::get('message') }}</div>
 @endif                    

<div class="container">

    <div class="addonsPurchased">
        <div class="addonPurch rims"></div>
        <div class="addonPurch blacklights"></div>
        <div class="addonPurch bluetooth"></div>
        <div class="addonPurch freshThreads"></div>
        <div class="addonPurch lessCal"></div>
        <div class="addonPurch cowbell"></div>
    </div>


    <div class="row">
        <div class="col-md-12 header">
            <header>


                @if(Auth::check())

                <div class="userHeadingBar">
                    <div class="userGreeting">Hello {{Auth::user()->name}}.</div>
                    <div class="userLogout"><a href='/logout'>Log out</a></div>
                </div>
                @endif

                <a href="/product"><h1>The UpSell App</h1></a>


                @if(Auth::check())
                <nav class="nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="/product">Product Info</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/profile">Profile</a></li>

                    </ul>


                    @yield('nav')

                </nav>

                @endif

            </header>
        </div>
    </div>
    <div class="row content">
        <div class="col-md-12">
            <section>
                {{-- Main page content will be yielded here --}}
                @yield('content')
            </section>
        </div>
    </div>

    <div class="row contentWithAside">

        <div class="col-md-8">
            <section>
                {{-- Main page content will be yielded here --}}
                @yield('contentWithAside')
            </section>
        </div>

        <div class="col-md-4">
            <aside>
                {{-- Aside content will be yielded here --}}
                @yield('aside')
            </aside>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12 footer">
            <footer> &copy; {{ date('Y') }}</footer>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>
</html>