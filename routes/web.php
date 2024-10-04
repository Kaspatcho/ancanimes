<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\EnsureIsAuthenticated;

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(EnsureIsAuthenticated::class)->group(function() {
    Route::get('/lista', [AnimeController::class, 'index'])->name('anime.index');
    Route::get('/anime/{anime}', [AnimeController::class, 'show'])->name('anime.show');
    Route::get('/anime/episodio/{episodio}', [AnimeController::class, 'episode'])->name('anime.episode');
});
