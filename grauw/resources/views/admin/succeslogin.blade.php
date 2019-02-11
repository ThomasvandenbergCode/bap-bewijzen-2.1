@extends('masterlayout')


<h3>ingelogd!</h3>

@if(isset(Auth::user()->email))
    <div class="alert alert-danger succes-block">
    <strong>Welkom {{ Auth::user()->email }}</strong>
        <br>
        <a href="{{ url('logout') }}">Uitloggen</a>
    </div>
    @else
    <script>document.location =" {{ Route('loginpage') }}"</script>
    @endif


