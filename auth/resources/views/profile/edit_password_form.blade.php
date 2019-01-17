@extends ('layouts.app')

@section('content')
    <div class="container">
       <h1>Change password</h1>
        <form action=" {{ route('profile.handle_password') }}" method="POST">

            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="new_password">New password</label>
                <input type="password" name="new_password"
                        placeholder="Enter new password"
                 class="form-control">
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