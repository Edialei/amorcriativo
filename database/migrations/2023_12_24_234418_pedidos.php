<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedido', function (Blueprint $table){
            $table->id();
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->string('remetente');
            $table->string('destinatario');
            $table->string('name_cesta');
            $table->string('ponto_referencia');
            $table->string('adicional');
            $table->float('adicional_valor');
            $table->string('contato_destinatario');
            $table->string('endereco_entrega');
            $table->float('valor_total');
            $table->boolean('foto')->default(false);
            $table->date('data_entrega');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        //
    }
};
