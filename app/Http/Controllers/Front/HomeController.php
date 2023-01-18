<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class   HomeController extends Controller
{
    public function index()
    {
        $categories = Category::active()->withCount('posts')->get();
        $latest_posts = Post::latest()->active()->limit(10)->get();
        $most_viewed_posts = Post::with(['user', 'tags' => function ($query) {
            $query->take(2);
        }])->get();

        // dd($latest_posts);
        return view('front.home', compact('latest_posts', 'categories', 'most_viewed_posts'));
    }


    public function search()
    {
        $search = request()->query()['s'];

        $posts = Post::with('category')
            ->filterSearch(request()->query())
            ->orderBy('posts.created_at')
            ->get();

            // dd($posts);
        // dd($posts->first()->category->name);
        return view('front.search', compact('search', 'posts'));
    }
}
