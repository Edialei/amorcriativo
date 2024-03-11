<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        p {
            margin: 5px 0;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
<h2>Detalhes do Pedido</h2>
    <p><strong>ID do Pedido:</strong> {{ $pedido->id }}</p>
    <p><strong>Nome do Cliente:</strong> {{ $pedido->nome_cliente }}</p>
    <p><strong>Remetente:</strong> {{ $pedido->remetente }}</p>
    <p><strong>Destinatário:</strong> {{ $pedido->destinatario }}</p>
    <p><strong>Nome da Cesta:</strong> {{ $pedido->name_cesta }}</p>
    <p><strong>Ponto de Referência:</strong> {{ $pedido->ponto_referencia }}</p>
    <p><strong>Adicional:</strong> {{ $pedido->adicional }}</p>
    <p><strong>Valor Adicional:</strong> R$ {{ $pedido->adicional_valor }}</p>
    <p><strong>Contato do Destinatário:</strong> {{ $pedido->contato_destinatario }}</p>
    <p><strong>Endereço de Entrega:</strong> {{ $pedido->endereco_entrega }}</p>
    <p><strong>Valor Total:</strong> R$ {{ $pedido->valor_total }}</p>
    <p><strong>Incluir Foto:</strong> {{ $pedido->foto ? 'Sim' : 'Não' }}</p>
    <p><strong>Data de Entrega:</strong> {{ $pedido->data_entrega }}</p>
</body>
</html>