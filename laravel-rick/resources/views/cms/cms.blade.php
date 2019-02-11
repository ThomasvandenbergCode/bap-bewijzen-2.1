@extends('layouts.master')

@section('title')
    <title>CMS</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cms.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
@endsection

@section('content')

    <h1>Projecten</h1>
    <h2><a href="{{route ('kledingToevoegen')}}">Toevoegen</a></h2>
    <table>
        <tr>
            <th>Product naam</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

            @foreach ($kleren as $kleding)
            <tr>
                <td>{{$kleding->name}}</td>
                <td><a href="{{route ('edit',$kleding)}}">edit</a></td>
                <td><a href="{{route ('delete',$kleding)}}">delete</a></td>
            </tr>
            @endforeach

    </table>

    <div class="text-center">
        {!! $kleren->links(); !!}
    </div>
    @endsection
    {{--@foreach ($kleren as $kleding)--}}
        {{--<a href="{{route ('edit',$kleding)}}">{{$kleding->name}}</a>--}}
        {{--{{ route('edit{',$kleding->id, '}'}}) }}--}}
        {{--@endforeach--}}
