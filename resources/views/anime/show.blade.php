<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - Episódios</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>{{ $anime->nome }}</h1>
    <div class="container">
        <a href="{{ route('anime.index') }}">Voltar</a>

        <div class="card-list">
            @foreach ($anime->episodios as $episodio)
            <div class="card">
                <div class="card-title">{{ $anime->nome }} - Episódio {{ $episodio->temporada }} x {{ $episodio->n_episodio }}</div>
                <div class="card-body">
                    <a href="{{ route('anime.episode', ['episodio' => $episodio]) }}">Assistir</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
