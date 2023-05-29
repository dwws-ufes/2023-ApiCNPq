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
        Schema::create('bolsas', function (Blueprint $table) {
            $table->id();

            $table->integer('protocolo');
            
            $table->integer('programacnpq_id')->unsigned();
            $table->foreign('programacnpq_id')->references('id')->on('programacnpq');

            $table->date('data_inicio');
            $table->date('data_fim');

            $table->float('valor_bolsa');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolsas');
    }
};
