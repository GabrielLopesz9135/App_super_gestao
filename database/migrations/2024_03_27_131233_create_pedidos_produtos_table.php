<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained();
            $table->foreignId('produto_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos_produtos', function (Blueprint $table){
            $table->dropForeign('pedidos_produtos_pedido_id_foreign');
            $table->dropForeign('pedidos_produtos_produto_id_foreign');
        });

        Schema::dropIfExists('pedidos_produtos');
    }
};
