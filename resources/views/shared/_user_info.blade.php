<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('70') }}" alt="{{ $user->name }}" class="rounded-circle"/>
</a>
<h1>{{ $user->name }}</h1>
