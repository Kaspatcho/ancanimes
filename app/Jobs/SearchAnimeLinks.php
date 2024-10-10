<?php

namespace App\Jobs;

use App\Models\Animes;
use App\Models\Episodio;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SearchAnimeLinks implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Animes $anime)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $episodes = $this->anime->episodios()->get();
        $episodes->each(function(Episodio $ep) {
            ProcessAnimeEpisode::dispatch($this->anime, $ep);
        });
    }
}
