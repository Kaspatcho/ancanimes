<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaAnime;

class CategoriaAnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaAnime::create([
            'id_tipo' => 1,
            'id_anime' => 1,
            'id_categoria' => 1
        ]);

        CategoriaAnime::create([
            'id_tipo' => 2,
            'id_anime' => 2,
            'id_categoria' => 1
        ]);

        CategoriaAnime::create([
            'id_tipo' => 3,
            'id_anime' => 3,
            'id_categoria' => 4
        ]);

        CategoriaAnime::create([
            'id_tipo' => 4,
            'id_anime' => 4,
            'id_categoria' => 2
        ]);

        CategoriaAnime::create([
            'id_tipo' => 5,
            'id_anime' => 4,
            'id_categoria' => 5
        ]);

        CategoriaAnime::create([
            'id_tipo' => 6,
            'id_anime' => 4,
            'id_categoria' => 3
        ]);
    }
}
