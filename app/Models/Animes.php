<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animes extends Model
{
    use HasFactory;
    protected $table = 'animes';
    protected $primaryKey = 'id_anime';
    protected $keyType = 'int';
    protected $fillable = ['id_anime', 'nome'];
    public $timestamps = false;

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_anime', 'id_anime', 'id_categoria');
    }

    public function episodios()
    {
        return $this->hasMany(Episodio::class, 'id_anime', 'id_anime');
    }
}
