@extends('masterlayout')

@section('content')


    <form method="post" action="{{ route('user.add.check') }}" >
        {{ csrf_field() }}
        <div class="form-group">
            <br>
            <input class="form__input form__input--email" name="email" type="email" placeholder="you@ma">
        </div>
        <br>
        <div class="form-group">
            <br>
            <input class="form__input form__input--wachtwoord" type="password" name="password" placeholder="wachtwoord...">
        </div>
        <br>
        <div class="container-submit">
            <input class="form__submit" type="submit" value="Login">
        </div>
    </form>

@endsection

