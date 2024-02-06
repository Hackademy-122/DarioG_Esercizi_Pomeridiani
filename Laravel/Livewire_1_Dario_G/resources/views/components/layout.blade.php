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
    <div class="container">
        <div class="row text-center justify-content-between">
            <div class="col-2">
                <a href="{{route('home')}}">Home</a>
            </div>
            @auth    
            <div class="col-2">
                <a href="{{route('create')}}">Inserisci</a>
            </div>
            @endauth
            <div class="col-2">
                <a href="{{route('index')}}">Tutti</a>
            </div>
            <div class="col-2">
                <a class="" href="{{route('register')}}">Registrati</a>
            </div>
                        <div class="col-2">
                <a class="" href="{{route('login')}}">Login</a>
            </div>
                @if(Auth::user())
                    Benvenuto {{Auth::user()->name}}
                @endif

            @auth

                <div class="col-2">
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                </div>
            @endauth
 
    </div>

{{$slot}}

</body>
</html>