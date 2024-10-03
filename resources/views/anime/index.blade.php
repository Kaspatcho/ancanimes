<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - Lista</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>{{config('app.name')}}</h1>
    <div class="container">
        <div class="card-list">
            @foreach ($animes as $anime)
            <div class="card">
                <a href="{{ route('anime.show', ['id_anime' => $anime->id_anime]) }}"
                    style="text-decoration: none; color: black;">
                    <div class="card-title">{{ $anime->nome }}</div>
                    <div class="card-subtitle">
                        {{ count($anime->episodios) }} {{ count($anime->episodios) != 1 ? "Episódios" : "Episódio" }} -
                        @foreach($anime->categorias as $categoria)
                            @if($loop->last)
                                {{ $categoria->nome }}
                            @else
                                {{ $categoria->nome }},
                            @endif
                        @endforeach
                    </div>
                    <div class="card-body">
                        {{ $anime->descricao }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
