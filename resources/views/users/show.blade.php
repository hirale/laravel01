@extends('layouts.default')
@section('title',$user->name)

@section('content')
    <div class="col-12 text-center mt-3">
        <section>
            @include('shared._user_info', ['user' => $user])
        </section>
        <section class="text-left ml-1">
            @if ($statuses->count() > 0)
                <ul class="list-unstyled">
                    @foreach ($statuses as $status)
                        @include('statuses._status')
                    @endforeach
                </ul>
                <div class="mt-5">
                    {!! $statuses->render() !!}
                </div>
            @else
                <p>No tweets!</p>
            @endif
        </section>
    </div>
@endsection
