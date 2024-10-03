<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>{{ config('app.name') }}</h1>
    <form action="{{ route('login.auth') }}" method="POST">
        @csrf
        <label for="login">Login:</label>
        <input type="text" id="login" name="email"><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
