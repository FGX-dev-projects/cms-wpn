<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'is_active'];
    
    public function images()
    {
        return $this->hasMany(GalleryImages::class);
    }
}
