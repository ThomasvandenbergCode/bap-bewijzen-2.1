@extends('layouts.master')

@section('header')
    <h2>Artikel {{ $article_id }}</h2>
    @endsection

@section('content')

    <h3>titel van mijn article {{ $article_id }}</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolores fuga maiores minima molestiae, odio quisquam? Ab, accusamus assumenda dignissimos minus modi neque optio possimus sint suscipit tenetur. Fuga, impedit!
    </p>
@endsection