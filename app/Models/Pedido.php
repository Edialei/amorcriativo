<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id_cliente', 
        'remetente', 
        'destinatario',
        'name_cesta',
        'endereco_entrega',
        'ponto_referencia',
        'adicional',
        'adicional_valor',
        'contato_destinatario',
        'endereco_entrega',
        'valor_total',
        'foto',
        'data_entrega'
    ];
    
    protected $table = 'pedidos';
}
