<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animes;
use App\Models\Categoria;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Animes::all();
        return view('anime.index', compact('animes'));
    }

    public function show($id_anime)
    {
        $anime = Animes::find($id_anime);

        // Check if the anime exists
        if (!$anime) {
            return redirect()->route('root')->with('error', 'Anime not found.');
        }

        // Return a view and pass the anime data
        return view('anime.show', compact('anime'));
    }

    public function episode($id_anime, $id_episodio)
    {
        $anime = Animes::find($id_anime);

        if (!$anime) {
            return redirect()->route('root')->with('error', 'Anime not found.');
        }

        $nome = $anime->nome;
        $episodio = $anime->episodios->find($id_episodio);

        if (!$episodio) {
            return redirect()->route('root')->with('error', 'Anime episode not found.');
        }

        return view('anime.episode', compact('nome', 'episodio'));
    }
}
