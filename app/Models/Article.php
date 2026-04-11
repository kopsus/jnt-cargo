<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // kolom yang boleh diisi secara langsung dari form
    protected $fillable = [
        'title',
        'slug',
        'category',
        'thumbnail',
        'content'
    ];
}