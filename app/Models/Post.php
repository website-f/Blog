<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'body',
        'image',
        'status',
        'keyphrase',
        'seo-title',
        'slug',
        'meta',
        'author',
        'category',
    ];

    public function getIncrementing() {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
