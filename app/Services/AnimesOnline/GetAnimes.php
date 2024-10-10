<?php

namespace App\Services\AnimesOnline;
use App\Services\AnimesOnline\Entities\Episode;
use App\Services\AnimesOnline\Exceptions\AnimeNotFound;
use File;
use Http;

class GetAnimes
{
    private const URL = 'https://animesonlinecc.to';

    public static function search(string $anime)
    {
        // $file = File::get('episodes.json');
        // return json_decode($file, false);

        $anime_link = self::get_anime_link($anime);
        return self::get_episode_links($anime_link);
    }

    private static function get_anime_link(string $anime)
    {
        $search_url = self::URL . '/search/' . $anime;
        $body = Http::get($search_url)->body();
        $anchor = self::search_xpath($body, '//*[@class="poster"]/a');
        if(!$anchor->length) throw new AnimeNotFound();

        return $anchor->item(0)->getAttribute('href');
    }

    private static function get_episode_links(string $anime_link)
    {
        $body = Http::get($anime_link)->body();
        $titles = self::search_xpath($body, '//*[@class="episodiotitle"]')->getIterator();
        $episodes = [];
        $season = 0;

        foreach ($titles as $title) {
            $anchor = $title->getElementsByTagName('a')->item(0);
            $link = $anchor->getAttribute('href');
            $episode_title = $anchor->textContent;

            preg_match("/\w+ (\d+)/", $episode_title, $matches);
            $episode = (int) $matches[1];
            if($episode == 1) $season++;

            $episodes[] = new Episode($episode_title, $link, $season, $episode);
        }

        return $episodes;
    }

    public static function get_video_link(string $episode_link)
    {
        $body = Http::get($episode_link)->body();
        $iframe = self::search_xpath($body, '//iframe');
        return $iframe->item($iframe->length - 1)->getAttribute('src');
    }

    private static function search_xpath(string $html, string $query): \DOMNodeList
    {
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);

        return $xpath->query($query);
    }
}
