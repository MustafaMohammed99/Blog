<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
    }

    public function show(Category $category)
    {
        if ($category->status != 'active') {
            abort(404);
        }
        $category = $category->load('posts');

        $recentPosts = Post::latest()->limit(8)->get();

        return view('front.category.show', compact('category','recentPosts'));
    }
}
