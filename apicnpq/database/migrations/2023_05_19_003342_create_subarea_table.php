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
        Schema::create('subarea', function (Blueprint $table) {
            $table->id();
            $table->string('nome_subarea');

            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('area');

            $table->integer('grande_area_id')->unsigned();
            $table->foreign('grande_area_id')->references('id')->on('grandearea');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subarea');
    }
};
