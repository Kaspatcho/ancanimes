<?php

namespace App\Console\Commands;

use App\Jobs\SearchAnimeLinks;
use App\Models\Animes;
use App\Models\Episodio;
use Illuminate\Console\Command;
use App\Services\AnimesOnline\GetAnimes as GetAnimesService;

class GetAnimes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-animes {anime_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var Animes $anime */
        $anime = Animes::find($this->argument('anime_id'));
        if(!$anime) {
            echo "anime not found in database!";
            die();
        }

        $episodes = GetAnimesService::search($anime->nome);

        foreach ($episodes as $episode) {
            Episodio::create([
                'id_anime' => $this->argument('anime_id'),
                'n_episodio' => $episode->episode,
                'temporada' => $episode->season,
                'link' => $episode->link
            ]);
        }

        SearchAnimeLinks::dispatch($anime);
    }
}
