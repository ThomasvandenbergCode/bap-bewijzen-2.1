@extends('layouts.master') @section('content')
    @if( session()->has('formData'))
        <div class="well well-sm">
            <h1>Bedankt</h1>
            <p>Hier ziet u de opgestuurde gegevens:</p>
            <p>
                <strong>Voornaam:</strong>
                {{ session('formData.name') }}<br/>
                <strong>Tussenvoegsel:</strong> {{ session('formData.description') }}<br/>
                <strong>Achternaam:</strong> {{ session('formData.large') }}<br/>
                <strong>E-mail:</strong> {{ session('formData.medium') }}<br/>
                <strong>Geboortedatum:</strong> {{ session('formData.small') }}<br/>
            </p>
            <p>
                {{--<a href="{{ route('registration.form') }}">Terug naar het formulier</a>--}}
                <a class="nav__ul--link" href="{{ route('cms') }}">Home</a>
            </p>
        </div>
    @endif
@endsection
