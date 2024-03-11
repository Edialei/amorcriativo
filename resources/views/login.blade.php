<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" value="{{ old('usuario') }}" required>
        <br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>