<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id_usuario', 
        'nome_cliente', 
        'telefone',
        'endereco'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario'); 
    }

}
