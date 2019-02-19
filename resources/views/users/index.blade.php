@extends('layouts.default')
@section('title', 'All users')

@section('content')
    <h2 class="my-3 text-center">All users</h2>
    <div class="list-group list-group-flush">
        @foreach ($users as $user)
            @include('users._user')
        @endforeach
    </div>
    <div class="mt-3">
        {!! $users->render() !!}
    </div>
@stop
