<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaAnime extends Model
{
    use HasFactory;
    protected $table = "categoria_anime";
    protected $fillable = ['id_tipo', 'id_anime', 'id_categoria'];
    public $timestamps = false;
}
