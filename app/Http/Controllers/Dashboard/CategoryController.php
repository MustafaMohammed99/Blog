<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Concerns\UploadImages;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    use UploadImages;

    public function index()
    {
        $request = request();
        $categories = Category::with('parent')->withCount([
            'posts' => function ($query) {
                $query->where('status', '=', 'active');
            }
        ])
            ->filter($request->query())
            ->orderBy('categories.id')
            ->paginate();

        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        $parents = Category::all()->pluck('name', 'id');
        $category = new Category();
        return view('dashboard.categories.create', compact('category', 'parents'));
    }


    public function store(CategoryRequest $request)
    {
        $data = $request->except('image');
        $data['image'] = $this->uploadImage($request, 'categories');
        Category::create($data);
        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category created!');
    }


    public function show(Category $category)
    {
        $posts = $category->posts()->latest()->paginate(5);

        return view('dashboard.categories.show', [
            'category' => $category,
            'posts' => $posts
        ]);
    }


    public function edit(Category $category)
    {
        // SELECT * FROM categories WHERE id <> $id
        // AND (parent_id IS NULL OR parent_id <> $id)
        $parents = Category::where('id', '<>', $category->id)
            ->where(function ($query) use ($category) {
                $query->whereNull('parent_id')
                    ->orWhere('parent_id', '<>', $category->id);
            })->get()->pluck('name', 'id');
        return view('dashboard.categories.edit', compact('category', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $old_image = $category->image;
        $data = $request->except('image');
        $new_image = $this->uploadImage($request, 'categories');
        if ($new_image) {
            $data['image'] = $new_image;
        }

        $category->update($data);
        if ($old_image && $new_image) {
            Storage::disk('uploads')->delete(Str::after($old_image, 'uploads/'));
        }
        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category updated!');
    }


    public function destroy(Category $category)
    {
        Gate::authorize('categories.delete');
        $category->delete();
        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category deleted!');
    }



    public function trash()
    {
        Gate::authorize('categories.trash');
        $request = request();
        $categories = Category::with('parent')->withCount([
            'posts' => function ($query) {
                $query->where('status', '=', 'active');
            }
        ])
            ->filter($request->query())
            ->orderBy('categories.name')
            ->onlyTrashed()->paginate();
        return view('dashboard.categories.trash', compact('categories'));
    }

    public function restore(Request $request, $id)
    {
        Gate::authorize('categories.restore');
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('dashboard.categories.trash')
            ->with('succes', 'Category restored!');
    }

    public function forceDelete($id)
    {
        Gate::authorize('categories.forceDelete');
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();
        if ($category->image) {
            Storage::disk('uploads')->delete(Str::after($category->image, 'uploads/'));
        }

        return redirect()->route('dashboard.categories.trash')
            ->with('succes', 'Category deleted forever!');
    }
}
