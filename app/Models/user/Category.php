<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts() {

        return $this->belongsToMany(Category::class, 'category_posts');
    }
}
