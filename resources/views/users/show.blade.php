@extends('layouts.default')
@section('title',$user->name)

@section('content')
    <div class="col-12 text-center mt-3">
        @include('shared._user_info', ['user' => $user])
    </div>
@endsection
