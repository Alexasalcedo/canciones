<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Canciones </title>
    </head>
    <body>
        <h1>Canciones</h1>
        @if (is_null($cancion))
            <ul>
                @foreach ($canciones as $cancion)
                    <li>{{$cancion['cancion']}} - {{$cancion['artista']}}</li>
                @endforeach
            </ul>
        @else
            <h2>{{$cancion['cancion']}}</h2>
            <p>{{$cancion['artista']}}</p>
        @endif
    </body>
</html>