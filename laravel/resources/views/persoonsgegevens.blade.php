@extends('layouts.master')

@section('content')


    @foreach($persoonsgegevens as $information)
        <table class="table_persoonsgegevens">
            <tr>
                <th>ID</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>mailadres</th>
                <th>admin</th>
                <th>geactiveerd</th>
            </tr>
        <tr>
            <td>{{$information->persoons_id}} </td>
            <td>{{$information->voornaam}} </td>
            <td>{{$information->tussenvoegsel}} </td>
            <td>{{$information->achternaam}} </td>
            <td>{{$information->mailadres}} </td>
            <td>{{$information->admin_rechten}} </td>
            <td>{{$information->accountBevestigd}} </td>
        </tr>
        </table>
    @endforeach


@endsection