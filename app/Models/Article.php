<?php

namespace App\Models;

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
    'user_id',
];
}
