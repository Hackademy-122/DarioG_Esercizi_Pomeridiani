<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Due</title>
</head>
<body>
@foreach ($ann as $item)
        <h1 >{{$item['title']}}</h1>
        <h1 >{{$item['description']}}</h1>
        <H1>{{$item['price']}}</H1>
@endforeach


    <script src="/js/script.js"></script>
</body>
</html>