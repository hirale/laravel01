@extends('layouts.default')

@section('title', 'Login')

@section('content')
    <div class="my-5 mx-auto" style="width: 500px;">
        @include('shared._errors')
        <form method="post" action=" {{ action('SessionsController@create') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}"
                           placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password"
                           value="{{ old('password') }}" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input ml-0" type="checkbox" name="remember" id="defaultCheck1">
                    <label class="form-check-label ml-3" for="defaultCheck1">
                        Remember me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
        <hr>
        <span><a href="{{ route('password.request') }}">Forgot password?</a></span>
        <span class="float-right">Don't Have an Account? <a href="{{ route('users.create') }}">Sign up now!</a></span>
    </div>
@endsection
