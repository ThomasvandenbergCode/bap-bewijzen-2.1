@extends('layouts.master')

@section('header')
    <h1 class="title">Choose<span style="color:rgb(0, 138, 224);">4</span>FIT.nl</h1>
    <nav>
        <div class="nav-list-item"><a href="{{ route("homepage") }}">home</a></div>
        <div class="nav-list-item"><a href="{{ route("oefeningen") }}">oefeningen</a></div>
        <div class="nav-list-item"><a href="{{ route('schemas') }}">schema's</a></div>
        <div class="nav-list-item"><a href="{{ route('joudoel') }}">jou doel</a></div>
        <div class="nav-list-item"><a href="{{ route('vragen') }}">vragen</a></div>
        <div class="nav-list-item"><a href="{{ route('voeding') }}">voeding</a></div>
        <div class="nav-list-item"><a href="{{ route('suplementen') }}">suplementen</a></div>
        <div class="nav-list-item nav__active"><a href="{{ route('contact') }}">contact</a></div>

    </nav>
@endsection

@section('content')
    <h2>Uw gegevens</h2>

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









        <form action="{{ route('registration.form.handle') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="">Voornaam:</label>
                    <input type="text" name="firstname" class="form-control" value=""/>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="">Tussenvoegsel:</label>
                    <input type="text" name="middlename" class="form-control"
                           value=""/>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Achternaam:</label>
                    <input type="text" name="lastname" class="form-control"
                           value=""/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">E-mail:</label>
            <input type="email" name="email" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label for="">Geboortedatum:</label>
            <input type="text" name="geboortedatum" class="form-control"
                   value=""/>
        </div>
        <div class="form-group">
            <label for="">Website:</label>
            <input type="text" name="website" class="form-control" value=""/>
        </div>
        <p>
            <button type="submit" class="btn btn-primary">Opsturen</button>
        </p>
    </form>
@endsection