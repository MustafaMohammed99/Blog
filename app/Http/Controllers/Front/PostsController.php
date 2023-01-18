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
        $categories = Category::active()->withCount('posts')->get(); // to left page in front
        $recentPosts = Post::latest()->active()->limit(8)->get(); // to left page in front

        $tags= $post->load('tags');
        return view('front.post.show', compact('post','recentPosts', 'tags','categories'));
    }
}
