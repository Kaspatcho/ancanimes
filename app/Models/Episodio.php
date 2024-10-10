<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $table = 'episodios';
    protected $primaryKey = 'id_episodio';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_anime',
        'n_episodio',
        'temporada',
        'link',
        'video_link',
    ];

    public function anime()
    {
        return $this->belongsTo(Animes::class, 'id_anime', 'id_anime');
    }
}
