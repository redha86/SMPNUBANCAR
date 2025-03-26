<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['nama_kegiatan','deskripsi_kegiatan','kategori','tanggal','foto'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
