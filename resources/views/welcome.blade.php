<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Ciao da vite</h1>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
        <div class="container d-flex flex-wrap gap-3 p-4">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Original name - "{{ $movie->original_title }}"</h6>
                    <div class="card-text">{{$movie->nationality}}</div>
                    <div class="card-text">{{$movie->data}}</div>
                    <div class="card-text">Vote: {{$movie->vote}}</div>
                    
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
