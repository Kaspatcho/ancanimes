<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
    <h1>Lista de animes</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Categoria</th>
        </tr>
        @foreach ($animes as $anime)
        <tr>
            <td>{{ $anime->nome }}</td>
            <td>
                @foreach($anime->categorias as $categoria)
                    @if($loop->last)
                        {{ $categoria->nome }}
                    @else
                        {{ $categoria->nome }},
                    @endif
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
