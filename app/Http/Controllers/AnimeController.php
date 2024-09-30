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
}
