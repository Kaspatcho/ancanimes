<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animes;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animes::create([
            'id_anime' => 1,
            'nome' => 'Naruto',
            'descricao' => 'Um anime muito bom sobre um muleque que faz rasengan'
        ]);

        Animes::create([
            'id_anime' => 2,
            'nome' => 'Attack on Titan',
            'descricao' => 'Um muleque fica grande e pelado'
        ]);

        Animes::create([
            'id_anime' => 3,
            'nome' => 'Kaguya-Sama',
            'descricao' => 'Dois tsundere fudido que fica de tramoia ao inves de se declarar'
        ]);

        Animes::create([
            'id_anime' => 4,
            'nome' => 'Overlord',
            'descricao' => 'Esqueletao mago'
        ]);
    }
}
