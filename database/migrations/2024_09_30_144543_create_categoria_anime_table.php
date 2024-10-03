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
        Schema::create('categoria_anime', function (Blueprint $table) {
            $table->integer('id_tipo')->primary();
            $table->integer('id_anime')->nullable();
            $table->integer('id_categoria')->nullable();

            $table->foreign('id_anime')->references('id_anime')->on('animes');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_anime');
    }
};
