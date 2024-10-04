<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name') }}
    </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/login.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <h1>
            {{ config('app.name') }}
        </h1>

        <div class="switch-container">
            <div class="switch-nav">
                <div class="switch-nav-option" data-target="login-form">Login</div>
                <div class="switch-nav-option" data-target="signup-form">Cadastro</div>
            </div>

            <div class="switch-body">
                <div class="switch-form selected" id="login-form">
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        @error('email', 'login')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <label for="auth-login">Login:</label>
                        <input type="text" id="auth-login" name="email" autocomplete="username"><br>
                        @error('password', 'login')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <label for="auth-password">Senha:</label>
                        <input type="password" id="auth-password" name="password" autocomplete="current-password">
                        <input type="submit" value="Entrar">
                    </form>
                </div>

                <div class="switch-form" id="signup-form">
                    <form action="/signup" method="POST">
                        @csrf
                        <label for="signup-name">Nome:</label>
                        <input type="text" id="signup-name" name="name" autocomplete="name">

                        @error('email', 'signup')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <label for="signup-login">Login:</label>
                        <input type="text" id="signup-login" name="email" autocomplete="off">

                        @error('password', 'signup')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <label for="signup-password">Senha:</label>
                        <input type="password" id="signup-password" name="password" autocomplete="new-password">
                        <label for="signup-confirm">Confirmar Senha:</label>
                        <input type="password" id="signup-confirm" name="password_confirmation" autocomplete="new-password">
                        <input type="submit" value="Cadastrar-se">
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
