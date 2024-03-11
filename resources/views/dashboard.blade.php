<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
    @section('content')
    
        <h2>Dashboard</h2>

        <p>Bem-vindo, {{ $usuarioLogado->name }}!</p>

        <div>
            <h3>Pedidos do Dia</h3>
            @forelse ($pedidosDoDia as $pedido)
                <div>
                    <button onclick="filterPedidos('{{ $pedido->data_entrega }}')">{{ $pedido->nome_cliente }}</button>
                </div>
            @empty
                <p>Sem pedidos para hoje.</p>
            @endforelse
        </div>

        <div>
            <h3>Pedidos do Dia Seguinte</h3>
            @forelse ($pedidosDoDiaSeguinte as $pedido)
                <div>
                    <button onclick="filterPedidos('{{ $pedido->data_entrega }}')">{{ $pedido->nome_cliente }}</button>
                </div>
            @empty
                <p>Sem pedidos para amanhã.</p>
            @endforelse
        </div>

        <a href="{{ route('pedido.create') }}"><button>Criar Novo Pedido</button></a>

        <form action="{{ route('login.destroy', ['id' => Auth::id()]) }}" method="GET">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <script>
            function filterPedidos(data) {
                // Redireciona para a rota com a data como parâmetro
                window.location.href = "{{ route('pedidos.filter') }}?data=" + data;
            }
        </script>

</body>
</html>

