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
        Schema::create('episodios', function (Blueprint $table) {
            $table->increments('id_episodio'); // Auto-incrementing primary key
            $table->integer('id_anime');
            $table->unsignedInteger('n_episodio');
            $table->unsignedInteger('temporada');
            $table->string('link', 100);
            $table->timestamps();

            // Foreign key
            $table->foreign('id_anime')->references('id_anime')->on('animes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodios');
    }
};
