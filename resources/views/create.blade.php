<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Document</title>
</head>
<body>
@section('content')

    <h2>Criar Novo Pedido</h2>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('pedido.store') }}">
        @csrf

        <!-- Informações do Cliente -->
        <h3>Informações do Cliente</h3>

        <label for="cliente_existente">Cliente Existente:</label>
        <select name="cliente_existente" id="cliente_existente">
            <option value="">Selecione um cliente existente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>

        <div id="novo_cliente">
            <h4>Novo Cliente</h4>

            <label for="nome_cliente">Nome do Cliente:</label>
            <input type="text" name="nome_cliente" required>

            <label for="telefone_cliente">Telefone do Cliente:</label>
            <input type="text" name="telefone_cliente" required>

            <label for="endereco_cliente">Endereço do Cliente:</label>
            <input type="text" name="endereco_cliente" required>
        </div>

        <!-- Informações do Pedido -->
        <h3>Informações do Pedido</h3>

        <label for="remetente">Remetente:</label>
        <input type="text" name="remetente" required>

        <label for="destinatario">Destinatário:</label>
        <input type="text" name="destinatario" required>

        <label for="name_cesta">Nome da Cesta:</label>
        <input type="text" name="name_cesta" required>

        <label for="ponto_referencia">Ponto de Referência:</label>
        <input type="text" name="ponto_referencia" required>

        <label for="adicional">Adicional:</label>
        <input type="text" name="adicional" required>

        <label for="adicional_valor">Valor Adicional:</label>
        <input type="number" name="adicional_valor" required step="0.01">

        <label for="contato_destinatario">Contato do Destinatário:</label>
        <input type="text" name="contato_destinatario" required>

        <label for="endereco_entrega">Endereço de Entrega:</label>
        <input type="text" name="endereco_entrega" required>

        <label for="valor_total">Valor Total:</label>
        <input type="number" name="valor_total" required step="0.01">

        <label for="foto">Incluir Foto:</label>
        <input type="checkbox" name="foto" value="1">

        <label for="data_entrega">Data de Entrega:</label>
        <input type="date" name="data_entrega" required>

        <button type="submit">Salvar Pedido</button>
    </form>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var clienteExistenteSelect = document.getElementById('cliente_existente');
        var novoClienteDiv = document.getElementById('novo_cliente');

        clienteExistenteSelect.addEventListener('change', function () {
            novoClienteDiv.style.display = clienteExistenteSelect.value === '' ? 'block' : 'none';
        });

        // Exibe o formulário do novo cliente se "Selecione um cliente existente" não estiver selecionado
        if (clienteExistenteSelect.value === '') {
            novoClienteDiv.style.display = 'block';
        } else {
            novoClienteDiv.style.display = 'none';
        }
    });
</script>


</body>
</html>