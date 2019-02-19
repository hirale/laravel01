@extends('layouts.default')
@section('title')
    Edit {{ $user->name }}
@endsection

@section('content')
    <div class="my-5 mx-auto" style="width: 500px;">
        @include('shared._errors')
        <form method="post" action=" {{ action('UsersController@update', $user->id) }}">
            {{ method_field('PATCH') }}
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}"
                           placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" disabled class="form-control" id="email" value="{{ $user->email }}"
                           placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password"
                           value="{{ old('password') }}"
                           placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                           value="{{ old('password-confirmation') }}" placeholder="Password Confirmation">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
