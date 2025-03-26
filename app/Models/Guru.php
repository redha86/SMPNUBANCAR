<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['nama','alamat','pelajaran','pendidikan','foto'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
