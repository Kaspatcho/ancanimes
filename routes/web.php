<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::get('/', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/{id_anime}', [AnimeController::class, 'show'])->name('anime.show');
Route::get('/anime/{id_anime}/episodio/{id_episodio}', [AnimeController::class, 'episode'])->name('anime.episode');
