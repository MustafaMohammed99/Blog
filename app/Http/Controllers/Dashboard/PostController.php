<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use App\Concerns\UploadImages;
use App\Concerns\DealDOMDocument;
use App\Models\Tag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use UploadImages, DealDOMDocument;


    public function index()
    {
        $posts = Post::with('category', 'user:id,name')
            ->filter(request()->query())
            ->orderBy('posts.title')
            ->paginate();
        return view('dashboard.posts.index', compact('posts'));
    }


    public function create()
    {
        $post = new Post();
        $categories = Category::all();
        $categories = $categories->pluck('name', 'id');
        $tags = '';
        return view('dashboard.posts.create', compact('categories', 'post', 'tags'));
    }


    public function store(PostRequest $request)
    {
        $data = $request->except('image', 'tags', 'status', 'description');
        $data['image'] = $this->uploadImage($request, 'posts');
        /*
        '<?xml encoding="utf-8" ?>'
        */
        $data['description'] = $this->prepareHtml($request->description); // upload images from html and add content return body html
        $data['user_id'] = Auth::user()->id;
        $post = Post::create($data);
        $this->addTags($request, $post);
        return Redirect::route('dashboard.posts.index')
            ->with('success', 'Post created!');
    }

    public function status(Post $post, $status)
    {
        Gate::authorize('categories.status');

        if ($status === 'active' || $status === 'archived') {
            $post->update(['status' => $status]);
            return response()->json(['success' => 'تم تحديث المقالة بنجاح']);
        } else {
            return response()->json(['success' => 'لم تنجح عملية تحديث المقالة']);
        }
    }



    public function show($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('view', $post);
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $categories = $categories->pluck('name', 'id');
        $tags = implode(',', $post->tags()->pluck('name')->toArray());
        return view('dashboard.posts.edit', compact('post', 'tags', 'categories'));
    }


    public function update(PostRequest $request, Post $post)
    {
        $data = $request->except('image', 'tags', 'status', 'description');
        $old_image = $post->image;
        $new_image = $this->uploadImage($request, 'posts');
        if ($new_image) {
            $data['image'] = $new_image;
        }
        // dd($request->description);
        $data['description'] = $this->prepareHtml($request->description); // upload images from html and return body html
        $post->update($data);
        $this->addTags($request, $post);

        if ($old_image && $new_image) {
            Storage::disk('uploads')->delete(Str::after($old_image, 'uploads/'));
        }
        return redirect()->route('dashboard.posts.index')
            ->with('success', 'post updated');
    }


    public function addTags($request, $post)
    {
        $tags = json_decode($request->post('tags'));
        $tag_ids = [];
        $saved_tags = Tag::all();
        if ($tags)
            foreach ($tags as $item) {
                $slug = Str::slug($item->value);
                $tag = $saved_tags->where('slug', $slug)->first();
                if (!$tag) {
                    $tag = Tag::create([
                        'name' => $item->value,
                        'slug' => $slug,
                    ]);
                }
                $tag_ids[] = $tag->id;
            }
        $post->tags()->sync($tag_ids);
    }

    public function destroy(post $post)
    {
        Gate::authorize('posts.delete');
        $post->delete();
        return Redirect::route('dashboard.posts.index')
            ->with('success', 'Proudct deleted!');
    }



    public function trash()
    {
        Gate::authorize('posts.trash');
        $request = request();
        $posts = Post::with(['category'])
            ->filter($request->query())
            ->orderBy('posts.title')
            ->onlyTrashed()->paginate();
        return view('dashboard.posts.trash', compact('posts'));
    }

    public function restore(Request $request, $id)
    {
        Gate::authorize('posts.restore');
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('dashboard.posts.trash')
            ->with('succes', 'post restored!');
    }

    public function forceDelete($id)
    {
        Gate::authorize('posts.forceDelete');
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();

        if ($post->image) {
            Storage::disk('uploads')->delete(Str::after($post->image, 'uploads/'));
        }

        return redirect()->route('dashboard.posts.trash')
            ->with('succes', 'post deleted forever!');
    }






    public function uploadImageEditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->file('upload')->move('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/uploads/' . $filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
