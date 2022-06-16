<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog1 extends Model
{
    use HasFactory;

    protected $table = "blog1s";
    protected $fillable = [
        'blog_id',
        'title',
        'text',
        'img'
    ];

}
