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
        Schema::create('beneficiario', function (Blueprint $table) {
            $table->id();

            $table->string('nome_beneficiario', 255);

            $table->integer('programacnpq_id')->unsigned();
            $table->foreign('programacnpq_id')->references('id')->on('programacnpq');

            $table->integer('bolsa_id')->unsigned();
            $table->foreign('bolsa_id')->references('id')->on('bolsas');
           
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');

            $table->integer('instituicao_id')->unsigned();
            $table->foreign('instituicao_id')->references('id')->on('instituicaos');

            $table->timestamps();
        });

        // Schema::table('beneficiario', function (Blueprint $table) {
        //     $table->foreignId('bolsa_id')->constrained('bolsas');
        // });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiario');
    }
};
