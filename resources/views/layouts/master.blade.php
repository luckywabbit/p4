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


    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>





<div class="container">
    <div class="row">
        <div class="col-md-12 header">
            <header>
                <a href="/"><h1>UpSell</h1></a>
                        
                         
                         
                     @if(Auth::check())
                     	<a href='/'>hello {{Auth::user()->name}}</a>
                        <a href='/logout'>Log out</a>
                    @endif
    
                        
                
                
                
                <nav>@yield('nav')</nav>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section>
                {{-- Main page content will be yielded here --}}
                @yield('content')
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 footer">
            <footer> &copy; {{ date('Y') }} </footer>
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

{{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
@yield('body')

</body>
</html>