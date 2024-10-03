<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - Episódio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <center>
            <h1>{{ $nome }} -> Episódio {{ $episodio->n_episodio }}</h1>
            <iframe width="560" height="315" src="{{ $episodio->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <br>
            <a href="{{ route('anime.index') }}">Voltar</a>
        </center>
    </div>
</body>
</html>
