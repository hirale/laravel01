@extends('layouts.default')

@section('title','Twitter Home')

@section('content')
    @if (Auth::check())
        <div class="row my-3">
            <div class="col-md-9">
                @include('statuses._status_form')
            </div>
            <aside class="col-md-3 float-right text-center">
                @include('shared._user_info', ['user'=>Auth::user()])
            </aside>
        </div>
        @include('shared._feed')
    @else
        <div class="jumbotron mt-4">
            <h1 class="display-4">Hello Laravel</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to
                featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('users.create') }}" role="button">Sign Up Now</a>
        </div>
    @endif
@endsection
