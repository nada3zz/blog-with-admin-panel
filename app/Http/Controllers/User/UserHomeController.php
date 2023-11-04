<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('user.blog', compact('posts'));
    }

}
