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
        <div class="row text-center">
            <div class="col-4">
                <a href="{{route('home')}}">Home</a>
            </div>    
            <div class="col-4">
                <a href="{{route('create')}}">Inserisci</a>
            </div>
            <div class="col-4">
                <a href="{{route('index')}}">Tutti</a>
            </div> 

        </div>
    </div>

{{$slot}}
</body>
</html>