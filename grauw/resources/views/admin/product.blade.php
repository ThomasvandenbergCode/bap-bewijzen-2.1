

@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
@section('content')
<table class="table">
    <th>
    <tr>
        <th scope="col">#</th>
        <th scope="col">product naam</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
        <th scope="col"><a href="{{route('addProduct')}}"><i class="fas fa-plus"></i></a></th>
    </tr>
    </th>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>grauw T-shirt</td>
        <td><i class="fas fa-pencil-alt"></i></td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Grauw Hoodie</td>
        <td><i class="fas fa-pencil-alt"></i></td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
        <th scope="row">3</th>
         <td>Grauw jeans</td>
        <td><i class="fas fa-pencil-alt"></i></td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    </tbody>
</table>
    @endsection