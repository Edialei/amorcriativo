<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function create()
    {
        return view('dashboard');
    }

    public function index()
    {
        $usuarioLogado = Auth::user();

        $dataAtual = now()->toDateString();
        $dataDiaSeguinte = now()->addDay()->toDateString();
    

        $pedidosDoDia = Pedido::whereDate('data_entrega', $dataAtual)->get();
    
        $pedidosDoDiaSeguinte = Pedido::whereDate('data_entrega', $dataDiaSeguinte)->get();
    
        return view('dashboard', [
            'pedidosDoDia' => $pedidosDoDia,
            'pedidosDoDiaSeguinte' => $pedidosDoDiaSeguinte,
            'usuarioLogado' => $usuarioLogado
        ]);
    }

    public function filterPedidos(Request $request)
    {
        $data = $request->input('data');
        $pedidosDoDia = Pedido::whereDate('data_entrega', $data)->get();

        return view('pedidosDoDia', compact('pedidosDoDia'));
    }

    
}
