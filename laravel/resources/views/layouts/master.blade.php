<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>CLWO</title>
</head>
<body>
<div class="container">

    <header>


        @section('header')
            <h1 class="title">Choose<span style="color:rgb(0, 138, 224);">4</span>FIT.nl</h1>
            <div class="inloggen-registeren">
            <a class="link  link__inloggen" href="#">inloggen</a>
            <a class="link  link__registeren" href="#">registeren</a>
            </div>
            <nav>
                <div class="nav-list-item nav__active"><a href="{{ route("homepage") }}">home</a></div>
                <div class="nav-list-item"><a href="{{ route("oefeningen") }}">oefeningen</a></div>
                <div class="nav-list-item"><a href="{{ route('schemas') }}">schema's</a></div>
                <div class="nav-list-item"><a href="{{ route('joudoel') }}">jou doel</a></div>
                <div class="nav-list-item"><a href="{{ route('vragen') }}">vragen</a></div>
                <div class="nav-list-item"><a href="{{ route('voeding') }}">voeding</a></div>
                <div class="nav-list-item"><a href="{{ route('suplementen') }}">suplementen</a></div>
                <div class="nav-list-item"><a href="{{ route('contact') }}">contact</a></div>
            </nav>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>