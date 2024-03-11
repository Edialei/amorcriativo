<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>

    @if ($errors->any())
        <div>
            <strong>Erro:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('cadastro.store') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" value="{{ old('usuario') }}" required>
        <br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
