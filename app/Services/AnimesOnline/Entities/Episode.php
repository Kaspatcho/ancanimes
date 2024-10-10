<?php

namespace App\Services\AnimesOnline\Entities;

class Episode
{
    public string $title;
    public string $link;
    public ?int $season;
    public ?int $episode;

    public function __construct(string $title, string $link, int $season, int $episode) {
        $this->title = $title;
        $this->link = $link;
        $this->season = $season;
        $this->episode = $episode;
    }
}