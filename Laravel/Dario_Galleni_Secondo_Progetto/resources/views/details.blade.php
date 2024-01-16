<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- homepage css --}}
    <link rel="stylesheet" href="/css/homepage.css">
    
    <title>Home Page</title>
</head>

<body>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <img src="/img/laravel_logo.jpg" alt="laravel_logo" height="90px" width="90px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fs-3" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-3" href="#">Link</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
{{-- fine navbar --}}


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10 col-md-4 d-flex justify-content-center">
            <a href="{{route('chisiamo')}}"><button class="btn btn-primary" type="button">Chi Siamo</button></a>
        </div>
        <div class="col-10 col-md-4 d-flex justify-content-center">
            <a href=""><button class="btn btn-primary" type="button">Servizi</button></a>
        </div>
        <div class="col-10 col-md-4 d-flex justify-content-center">
            <a href="{{route("homePage")}}"><button class="btn btn-primary" type="button">Torna alla home</button></a>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <h1 class="text-center">Dettaglio studente {{$segnaposto['name']}}</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
            <div class="card p-5 shadow" style="width: 18rem;">
                <img src="{{$segnaposto['img']}}" class="card-img-top" alt="{{$segnaposto['name']}}">
                <div class="card-body text-center">
                <h5 class="card-title">{{$segnaposto['name']}}</h5>
                <p>{{$segnaposto['surname']}}</p>
                <p>{{$segnaposto['age']}}</p>
                
                <a href="{{route('details', ['id'=> $segnaposto['id']])}}" class="btn btn-primary">Dettaglio</a>

            </div>
        </div>
    </div>
</div>



</body>
</html>