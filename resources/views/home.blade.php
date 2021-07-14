<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">

        <title>Laravel</title>

       
       
    </head>
    <body>
       <h1>{{$title}}</h1>
       <div class="container">
           @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie->title}}</h2>
                    <h3>{{$movie->original_title}}</h3>
                    <h4>{{$movie->date}}</h4>
                    <small>{{$movie->vote}}</small>
                </div>
               
           @endforeach
       </div>
    </body>
</html>
