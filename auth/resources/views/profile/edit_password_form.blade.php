@extends ('layouts.app')

@section('content')
    <div class="container">
       <h1>Change password</h1>

        @if($errors->count())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
            </div>
        @endif

        <form action=" {{ route('profile.update_password') }}" method="POST">

            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="new_password">New password</label>
                <input type="password" name="new_password"
                        placeholder="Enter new password"
                 class="form-control">
                @if ($errors->has('new_password'))
                    <strong>{{ $errors->first('new_password') }}</strong>
                    @endif
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">New password again</label>
                <input type="password" name="new_password_confirmation"
                       placeholder="Enter new password again"
                       class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    @endsection