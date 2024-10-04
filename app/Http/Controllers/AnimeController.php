<?php

namespace App\Http\Controllers;

use App\Models\Animes;
use App\Models\Episodio;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Animes::all();
        return view('anime.index', compact('animes'));
    }

    public function show(Animes $anime)
    {
        // Return a view and pass the anime data
        return view('anime.show', compact('anime'));
    }

    public function episode(Episodio $episodio)
    {
        return view('anime.episode', compact('episodio'));
    }
}
