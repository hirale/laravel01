@extends('layouts.default')
@section('title','Sign Up')

@section('content')
    <div class="my-5 mx-auto" style="width: 500px;">
        <form method="post">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
@endsection
