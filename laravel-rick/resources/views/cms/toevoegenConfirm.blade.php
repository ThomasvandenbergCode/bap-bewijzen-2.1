@extends('layouts.master') @section('content')
    @if( session()->has('formData'))
        <div class="well well-sm">
            <h1>Bedankt</h1>
            <p>Hier ziet u de opgestuurde gegevens:</p>
            <p>
                <strong>Naam:</strong>
                {{ session('formData.name') }}<br/>
                <strong>Beschrijving:</strong> {{ session('formData.description') }}<br/>
                <strong>Large:</strong> {{ session('formData.large') }}<br/>
                <strong>Medium</strong> {{ session('formData.medium') }}<br/>
                <strong>Small</strong> {{ session('formData.small') }}<br/>
                <strong>Prijs:</strong> {{ session('formData.price') }}<br/>
            </p>
            <p>
                {{--<a href="{{ route('registration.form') }}">Terug naar het formulier</a>--}}
                <a class="nav__ul--link" href="{{ route('cms') }}">Home</a>
            </p>
        </div>
    @endif
@endsection
