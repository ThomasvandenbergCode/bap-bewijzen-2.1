@extends ('layouts.app')

@section('content')

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>






    @foreach($users as $user)
        <tr>
            <td>
                {{$user->name}}
            </td>

            <td>
                {{$user->email}}
            </td>
            <td>
                {{$user->password}}
            </td>
            <td>@if ($user->is_admin == 1) SUPER ADMIN @endif</td>
        </tr>
    @endforeach

</table>

    {!! $users->links(); !!}


