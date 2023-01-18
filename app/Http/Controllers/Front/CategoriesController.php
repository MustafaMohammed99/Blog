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
        $category =   Category::where('id', $category->id)->with(['posts' => function ($query) {
            $query->with(['tags' => function ($queryTags) {
                $queryTags->take(2);
            }]);
        }])->first();

        $categories = Category::active()->withCount('posts')->get(); // to left page in front
        $recentPosts = Post::latest()->active()->limit(8)->get(); // to left page in front


        return view('front.category.show', compact('category', 'recentPosts', 'categories'));
    }
}
