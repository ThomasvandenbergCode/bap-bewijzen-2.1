@extends('layouts.master')

@section('content');
<h1>photo gallery</h1>
    <p><a href="{{ route('gallery.add_photo') }}" class="btn btn-primary">Foto toevoegen</a></p>


        @foreach( $photos as $photo)
            <img width="30%" class="img-circle" src="{{ asset('/photos/'.$photo->photo) }}">
            <p>{{ $photo->description }}</p>

        @endforeach


@endsection