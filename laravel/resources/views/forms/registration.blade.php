@extends('layouts.master')



@section('content')
    <h2>Uw gegevens</h2>
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
