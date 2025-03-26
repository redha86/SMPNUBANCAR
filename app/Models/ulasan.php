<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Post;
class ulasan extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['nama','tanggal','ulasan'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
