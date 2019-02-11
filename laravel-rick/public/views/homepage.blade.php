@extends('layouts.master')

@section('title')
    <title>ycoool</title>
    @endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}"/>
@endsection

@section('banner_image')
    <img class="ree content" src="{{ asset('images/jeremybanner.jpg') }}" alt="banner">
    @endsection

@section('nav')
    <ul class="nav__ul" id="top-menu">
        <li class="nav__ul--li"><a class="nav__ul--link" href="#team">Kernwaarden</a></li>
        <li class="nav__ul--li"><a class="nav__ul--link" href="#over">Over ons</a></li>
        <li class="nav__ul--li"><a class="nav__ul--link" href="#waarom">Waarom</a></li>
        <li class="nav__ul--li"><a class="nav__ul--link" href="#contact">Contact</a></li>
    </ul>
    @endsection



