@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('auth.login') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email"
                   value="{{ old('email') }}" placeholder="Email ..."
            />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password"
                   id="password" placeholder="Password ..."
            />
        </div>
        <div>
            <input type="checkbox" name="remember" id="remember"><label for="remember">Remember Me</label>
            <a href="{{ route('password.email') }}">Forgot your password?</a>
        </div>
        <div>
            <button class="btn btn-success" type="submit">Login</button>
        </div>
    </form>
@endsection