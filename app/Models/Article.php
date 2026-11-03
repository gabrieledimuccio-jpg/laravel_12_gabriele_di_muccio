<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
    'title',
    'subtitle',
    'best_time',
    'description',
    'img',
    
];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
