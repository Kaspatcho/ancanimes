<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Wade Wilson',
            'email' => 'bla@example.com',
            'password' => '12345',
        ]);

        $this->call([
            AnimeSeeder::class,
            CategoriaSeeder::class,
            CategoriaAnimeSeeder::class,
        ]);
    }
}
