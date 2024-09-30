<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    protected $keyType = 'int';
    use HasFactory;

    public function animes() {
        return $this->belongsToMany(Animes::class, 'categoria_anime', 'id_categoria', 'id_anime');
    }
}
