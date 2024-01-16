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

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Homepage Progetto Due by {{$segnaposto}}</h1>
            
        </div>
    </div>    
</div>        

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 my-5">
            <h2 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati minima explicabo praesentium maxime, quia labore voluptas consequuntur sunt rem illo perspiciatis eos porro vero cum quis! Soluta, aliquam facere!</h2>
        </div>
        <div class="col-12 col-md-6 my-5 d-flex justify-content-center">
            <img class="img-fluid" src="https://picsum.photos/seed/picsum/400/300" alt="">
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
    </div>
</div>














































    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- my js --}}

<script src="/js/homepage.js"></script>
</body>
</html>