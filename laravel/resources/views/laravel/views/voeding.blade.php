@extends('layouts.master')

@section('header')
    <h1 class="title">Choose<span style="color:rgb(0, 138, 224);">4</span>FIT.nl</h1>
    <nav>
        <div class="nav-list-item"><a href="{{ route("homepage") }}">home</a></div>
        <div class="nav-list-item"><a href="{{ route("oefeningen") }}">oefeningen</a></div>
        <div class="nav-list-item"><a href="{{ route('schemas') }}">schema's</a></div>
        <div class="nav-list-item"><a href="{{ route('joudoel') }}">jou doel</a></div>
        <div class="nav-list-item"><a href="{{ route('vragen') }}">vragen</a></div>
        <div class="nav-list-item nav__active"><a href="{{ route('voeding') }}">voeding</a></div>
        <div class="nav-list-item"><a href="{{ route('suplementen') }}">suplementen</a></div>
        <div class="nav-list-item"><a href="{{ route('contact') }}">contact</a></div>
    </nav>
@endsection