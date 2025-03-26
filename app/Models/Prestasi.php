<?php

namespace App\Models;
use App\Models\Post;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['name', 'deskripsi', 'judul', 'tanggal','foto','kategori','foto'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
