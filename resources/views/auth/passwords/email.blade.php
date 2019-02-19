@extends('layouts.default')
@section('title', 'Reset password')

@section('content')
    <div class="my-5 mx-auto" style="width: 500px;">
        <h5 class="text-center">Reset Password</h5>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @include('shared._errors')
        <form method="post" action="{{ action('Auth\ForgotPasswordController@sendResetLinkEmail') }}">
            @csrf
            <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}"
                           placeholder="Email">
                </div>
                @if ($errors->has('email'))
                    <span class="form-text">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
@endsection
