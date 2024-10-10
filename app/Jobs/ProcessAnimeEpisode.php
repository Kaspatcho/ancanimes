<?php

namespace App\Jobs;

use App\Models\Animes;
use App\Models\Episodio;
use App\Services\AnimesOnline\GetAnimes;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessAnimeEpisode implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Animes $anime, public Episodio $episode)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $video_link = GetAnimes::get_video_link($this->episode->link);
        $this->episode->update(['video_link' => $video_link]);
    }
}
