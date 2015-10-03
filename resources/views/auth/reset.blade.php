@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('password.reset') }}">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="{{ old('email') }}" pattern="Email ..."
            />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password ...">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password"
                   name="password_confirmation" placeholder="Confirm password ..."
            />
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">
                Reset Password
            </button>
        </div>
    </form>
@endsection