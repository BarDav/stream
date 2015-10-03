@extends('layouts.main')

@section('content')
    <form method="POST" action="/password/email">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="{{ old('email') }}" placeholder="Email ..."
            />
        </div>
        <div>
            <button class="btn btn-success" type="submit">
                Send Password Reset Link
            </button>
        </div>
    </form>
@endsection