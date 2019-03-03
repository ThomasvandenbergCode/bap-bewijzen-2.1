<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/cms.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/>
    @show

    @section('title')
    <title>Hello, world!</title>
        @show
</head>
<body>
        <nav id="nav">
            @section('nav')
                @show
        </nav>
        <div class="banner">
            @section('banner_image')
                @show
        </div>

<div class="container">
    <header>
                @section('header')
                @show
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>