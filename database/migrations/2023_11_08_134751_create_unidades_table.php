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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remover relacionamentos 
        Schema::table('produto_detalhes', function(Blueprint $table){
           //remover FK
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); // [table]_[coluna]
            
           //remover coluna
            $table->dropColumn('unidade_id');

        });

        Schema::table('produtos', function(Blueprint $table){
            //remover FK
             $table->dropForeign('produtos_unidade_id_foreign'); // [table]_[coluna]
             
            //remover coluna
             $table->dropColumn('unidade_id');
 
         });

        Schema::dropIfExists('unidades');
    }
};
