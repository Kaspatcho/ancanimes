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
            $table->foreignId('id_anime')->constrained()->onDelete('cascade');
            $table->foreignId('id_categoria')->constrained()->onDelete('cascade');
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
