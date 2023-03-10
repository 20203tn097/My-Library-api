<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'id',
        'title',
        'content',
        'create_at',
        'updated_at'

    ];

    public function findBlogById($id)
    {
        return Blog::find($id);
    }
}
