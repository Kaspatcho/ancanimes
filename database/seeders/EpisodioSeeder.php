<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Episodio;

class EpisodioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Episodio::create([
            'id_anime' => 1,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://shorturl.at/mAycz'
        ]);

        Episodio::create([
            'id_anime' => 2,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://shorturl.at/tT0nX'
        ]);

        Episodio::create([
            'id_anime' => 3,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://shorturl.at/Gg1DO'
        ]);

        Episodio::create([
            'id_anime' => 3,
            'n_episodio' => 1,
            'temporada' => 2,
            'link' => 'https://shorturl.at/4FCec'
        ]);

        Episodio::create([
            'id_anime' => 4,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://shorturl.at/S7yZk'
        ]);
    }
}
