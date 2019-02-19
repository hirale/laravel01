<div class="row bg-primary">
    <div class="container">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
                <a class="navbar-brand" href="{{ route('home') }}">Laravel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('help') }}">Help</a>
                        </li>
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">All Users</a>
                            </li>
                            <li class="nav-item dropdown  active">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" id="logout" href="#">
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-block btn-danger" type="submit" name="button">Logout
                                            </button>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('users.create') }}" class="nav-link">Sign up</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
