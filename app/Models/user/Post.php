<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags() {

        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function categories() {

        return $this->belongsToMany(Category::class, 'category_posts');
    }

}
