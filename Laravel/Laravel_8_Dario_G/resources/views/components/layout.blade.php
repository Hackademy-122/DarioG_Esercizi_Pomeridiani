<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>

</head>

<body>

    <div class="container mb-y">
        <div class="row justify-content-center">
            @auth
            <div class="col-2 text-center">
                <a href="{{route('create')}}">Inserisci articolo</a>
            </div>
            @endauth
            <div class="col-2 text-center">
                <a href="{{route('index')}}">Tutti gli articoli</a>
            </div>
            <div class="col-2 text-center">
                <a href="{{route('category')}}">Crea Categoria</a> <br>
            </div>
            @auth
            <div class="col-2 text-center">
                <a href="{{route('utenti')}}">Tutti gli utenti</a> <br>
            </div>
            @endauth     
            <div class="col-2 text-center d-flex align-items-center">
                <ul>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(Auth::user())
                    Benvenuto {{Auth::user()->name}}
                    @else 
                    Login/Registrati
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
    </div>
    {{$slot}}
</body>
</html>
