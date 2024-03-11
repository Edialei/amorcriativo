<?php 

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;

class PedidoController extends Controller
{
    public function create()
    {
        $clientes = Cliente::all();

        return view('create', ['clientes' => $clientes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_cliente' => 'required',
            'telefone_cliente' => 'required',
            'endereco_cliente' => 'required',
            // Adicione outras regras de validação para os campos do pedido aqui
        ]);

        $cliente = Cliente::firstOrCreate([
            'nome_cliente' => $request->nome_cliente,
            'telefone' => $request->telefone_cliente,
            'endereco' => $request->endereco_cliente,
        ]);

        $pedido = Pedido::create([
            'id_cliente' => $cliente->id,
            'remetente' => $request->remetente,
            'destinatario' => $request->destinatario,
            'name_cesta' => $request->name_cesta,
            'ponto_referencia' => $request->ponto_referencia,
            'adicional' => $request->adicional,
            'adicional_valor' => $request->adicional_valor,
            'contato_destinatario' => $request->contato_destinatario,
            'endereco_entrega' => $request->endereco_entrega,
            'valor_total' => $request->valor_total,
            'foto' => $request->has('foto'),
            'data_entrega' => $request->data_entrega,
        ]);

        // Redirecione para a página desejada após salvar o pedido
        return redirect()->route('dashboard.index')->with('success', 'Pedido criado com sucesso!');
    }

    public function imprimirPedido($pedidoId)
    {
        $pedido = Pedido::findOrFail($pedidoId);
        // Lógica para recuperar os dados do pedido com o ID fornecido
        $pdf = PDF::loadView('pdf', compact('pedido'));

    // Retorna o PDF para ser exibido ou baixado
        return $pdf->stream('pdf');
    }
}