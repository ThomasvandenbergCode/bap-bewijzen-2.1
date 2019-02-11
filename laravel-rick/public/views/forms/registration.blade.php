@extends('layouts.master')

@section('title')
    <title>name</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}"/>
@endsection

@section('header')
    <h2>reeeeeeeee</h2>

@endsection

@section('content')

    @if ($errors->any())
        <h4>Het formulier bevat fouten:</h4>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Uw gegevens</h2>

    <form action="{{ route('registration.form.handle') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-5">

                <div class="form-group">

                    <label for="">Voornaam:</label>

                    <input type="text" name="firstname" class="form-control" value="{{ old('firstname')}}"/>

                </div>

            </div>

            <div class="col-2">

                <div class="form-group">

                    <label for="">Tussenvoegsel:</label>

                    <input type="text" name="middlename" class="form-control" value="{{ old('middlename') }}"/>

                </div>

            </div>

            <div class="col-5">

                <div class="form-group">

                    <label for="">Achternaam:</label>

                    <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}"/>

                </div>

            </div>

        </div>

        <div class="form-group">

            <label for="">E-mail:</label>

            <input type="email" name="email" class="form-control" value="{{ old('email') }}"/>

        </div>

        <div class="form-group">

            <label for="">Geboortedatum:</label>

            <input type="text" name="geboortedatum" class="form-control" value="{{ old('geboortedatum') }}"/>

        </div>

        <div class="form-group">

            <label for="">Website:</label>

            <input type="text" name="website" class="form-control" value="{{ old('website') }}"/>

        </div>

        <p>

            <button type="submit" class="btn btn-primary">Opsturen</button>

        </p>

    </form>

@endsection

