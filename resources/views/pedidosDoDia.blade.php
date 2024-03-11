<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pedido.css') }}">
    <title>Document</title>
</head>
<body>
    <h2>Pedidos do Dia</h2>
    <ul>
        @foreach ($pedidosDoDia as $pedido)
            <li>
                <strong>Nome do Cliente:</strong> {{ $pedido->nome_cliente }} <br>
                <strong>Remetente:</strong> {{ $pedido->remetente }} <br>
                <strong>Destinatário:</strong> {{ $pedido->destinatario }} <br>
                <strong>Nome da Cesta:</strong> {{ $pedido->name_cesta }} <br>
                <strong>Ponto de Referência:</strong> {{ $pedido->ponto_referencia }} <br>
                <strong>Adicional:</strong> {{ $pedido->adicional }} <br>
                <strong>Valor Adicional:</strong> R$ {{ $pedido->adicional_valor }} <br>
                <strong>Contato do Destinatário:</strong> {{ $pedido->contato_destinatario }} <br>
                <strong>Endereço de Entrega:</strong> {{ $pedido->endereco_entrega }} <br>
                <strong>Valor Total:</strong> R$ {{ $pedido->valor_total }} <br>
                <strong>Incluir Foto:</strong> {{ $pedido->foto ? 'Sim' : 'Não' }} <br>
                <strong>Data de Entrega:</strong> {{ $pedido->data_entrega }} <br>
                <button onclick="imprimirPedido({{ $pedido->id }})">Imprimir</button>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('dashboard.index') }}">Voltar para o Dashboard</a>

    <script>
        function imprimirPedido(pedidoId) {
            // Redireciona para a rota de impressão do pedido com o ID como parâmetro
            window.location.href = "{{ route('pedido.imprimir') }}/" + pedidoId;
        }
    </script>

    
</body>
</html>