<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Hello World</h1>
    <h1>
        <a href="{{route('ciccio')}}">ciao nuovo utente</a>
    </h1>

    <h1>
        <a href="{{route('contacts')}}">Contatti</a>
    </h1>

    <ul>
        @foreach ($data as $item)
            <li>{{$item}}</li>
        @endforeach 
    </ul>

</body>
</html>