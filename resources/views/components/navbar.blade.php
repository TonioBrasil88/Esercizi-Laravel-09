<nav class="navbar navbar-expand-lg nav_img">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PROFUMINO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('perfume.create') }}">Crea
                        Profumino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('perfume.index') }}">I nostri
                        Profumini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Area Personale</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @if (Route::currentRouteName() == 'profile.index') active @endif"
                                href="{{ route('profile.index') }}">I miei profumi</a></li>
                        <li><a class="dropdown-item" href="#">Acquisti e noleggi</a></li>
                        @if (Auth::user() != null)
                            <li class="dropdown-item text-end">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn logout_btn" type="submit"><i class="fa-solid fa-right-from-bracket ">LogOut</i></button>
                                    {{-- <button type="submit" class="btn btn-sm btn-danger"></button> --}}
                                </form>
                                {{-- <a class="dropdown-item @if (Route::currentRouteName() == 'register') active @endif" href="{{ route('register') }}">LogOut</a> --}}
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item @if (Route::currentRouteName() == 'login') active @endif"
                                    aria-current="page" href="{{ route('login') }}">Accedi</a>
                            </li>
                            <li>
                                <a class="dropdown-item @if (Route::currentRouteName() == 'register') active @endif"
                                    aria-current="page" href="{{ route('register') }}">Registrati</a>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
                  @auth
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">    
                    <span class="nav-link" aria-current="page">{{Auth::user()->name}}</span>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>
