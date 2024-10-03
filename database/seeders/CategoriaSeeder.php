<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'id_categoria' => 1,
            'nome' => 'Ação'
        ]);

        Categoria::create([
            'id_categoria' => 2,
            'nome' => 'Aventura'
        ]);

        Categoria::create([
            'id_categoria' => 3,
            'nome' => 'Isekai'
        ]);

        Categoria::create([
            'id_categoria' => 4,
            'nome' => 'Romance'
        ]);

        Categoria::create([
            'id_categoria' => 5,
            'nome' => 'RPG'
        ]);
    }
}
