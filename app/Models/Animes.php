<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animes extends Model
{
    protected $table = 'animes';
    protected $primaryKey = 'id_anime';
    protected $keyType = 'int';
    use HasFactory;

    public function categorias() {
        return $this->belongsToMany(Categoria::class, 'categoria_anime', 'id_anime', 'id_categoria');
    }
}
