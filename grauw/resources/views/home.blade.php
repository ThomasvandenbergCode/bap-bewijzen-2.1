@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        <div class="grid-container">

                <div class="layouts">Layout CMS</div>
                <div class="product"><a href="{{ route('product') }}">Product CMS</a></div>
        </div>

@endsection
