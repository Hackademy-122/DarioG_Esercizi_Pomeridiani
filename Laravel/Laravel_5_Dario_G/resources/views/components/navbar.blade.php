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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
