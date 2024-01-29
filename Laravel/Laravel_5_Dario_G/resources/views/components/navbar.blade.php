<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('store')}}">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contattaci')}}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('inserisci')}}">Inserisci annuncio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user())
                            Benvenuto {{Auth::user()->name}}
                            @else 
                            Azioni
                            @endif
                    </a>
                        <ul class="dropdown-menu">
                            @guest
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            @endguest
                            @auth
                            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a></li>
                            <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
