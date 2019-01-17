@extends('layouts.master')

@section('content');
<h1>photo  gallery</h1>
    <p>FOTO FORM</p>

<form action="{{ route('gallery.save_photo') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input placeholder="titel" type="text" name="title" class="form-control">
        @if($errors->has('title'))
            <p class="text-danger">{{  $error->first('title') }}</p>
            @endif
    </div>
    <div class="form-group">
        <textarea placeholder="omschrijving" type="text" name="description" class="form-control" row="10" cols="40"></textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{  $error->first('description') }}</p>
        @endif
    </div>
    <div class="form-group">
        <input type="file" name="photo">
        @if($errors->has('photo'))
            <p class="text-danger">{{  $error->first('photo') }}</p>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Opslaan</button>
</form>


@endsection