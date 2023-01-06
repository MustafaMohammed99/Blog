<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

    }

    public function show(Post $post)
    {
        if ($post->status != 'active') {
            abort(404);
        }
        $recentPosts = Post::latest()->limit(8)->get();
        $tags= $post->load('tags');
        return view('front.post.show', compact('post','recentPosts', 'tags'));
    }
}
