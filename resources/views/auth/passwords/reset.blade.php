@extends('layouts.default')
@section('title', 'Reset password')

@section('content')
    <div class="my-5 mx-auto" style="width: 500px;">
        <h5 class="text-center">Reset Password</h5>
        @include('shared._errors')
        <form method="post" action="{{ action('Auth\ResetPasswordController@reset') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                           value="{{ $email ?? old('email') }}" id="email"
                           placeholder="Email" required autofocus>
                </div>
                @if ($errors->has('email'))
                    <span class="form-text">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password"
                           class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password"
                           value="{{ old('password') }}"
                           placeholder="Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                           value="{{ old('password-confirmation') }}" placeholder="Password Confirmation" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
@endsection
