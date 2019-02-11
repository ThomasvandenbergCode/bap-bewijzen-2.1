@extends('layouts.master')

@section('title')
    <title>name</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
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
    <h2>U verandert: {{ $kleding->name}}</h2>
    <form action="{{route ('editConfirm',$kleding)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-5">

                <div class="form-group">

                    <label for="">Naam van het product:</label>

                    <input type="text" name="name" class="form-control" value="{{ $kleding->name}}"/>

                </div>

            </div>

            <div class="col-2">

                <div class="form-group">

                    <label for="">De beschrijving van het product:</label>
                    <br>

                    <textarea name="description" rows="10" cols="30" class="form-control">{{$kleding->description}}</textarea>

                </div>

            </div>

            <div class="col-2">

                <div class="form-group">

                    <label for="">De info van het product:</label>
                    <br>

                    <textarea name="info" rows="10" cols="30" class="form-control">{{$kleding->info}}</textarea>

                </div>

            </div>

            <div class="col-5">

                <div class="form-group">

                    <label for="">Large:</label>

                    <input type="text" name="large" class="form-control" value="{{ $kleding->large}}"/>

                </div>

            </div>

        </div>

        <div class="form-group">

            <label for="">Medium</label>

            <input type="text" name="medium" class="form-control" value="{{ $kleding->medium}}"/>

        </div>

        <div class="form-group">

            <label for="">Small:</label>

            <input type="text" name="small" class="form-control" value="{{ $kleding->small}}"/>

        </div>

        <div class="form-group">

            <label for="">Price:</label>

            <input type="text" name="price" class="form-control" value="{{ $kleding->price}}"/>

        </div>

        <div class="form-group">

            <label for="">Images:</label>

            <input type="file" name="photo" accept="image/*"/>

        </div>

        @foreach($kleding->images as $image)
            <a href="{{route ('deleteOne', $image->id)}}"><img src="{{asset('/photos/'.$image->filename)}}" alt="Grauw Image"></a>
        @endforeach
        <p>

            <button type="submit" class="btn btn-primary">Opsturen</button>

        </p>

    </form>

    <br>
    <br>




@endsection

