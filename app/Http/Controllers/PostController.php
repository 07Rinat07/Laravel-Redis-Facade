<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        $posts = Cache::rememberForever('posts:all', function () {
            return Post::all();
        });
        dd($posts->pluck('title'));
    }

    public function show($id)
    {
        $posts = Cache::get('posts:' . $id);
        dd($posts->title);
    }


}
