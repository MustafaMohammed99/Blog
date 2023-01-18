@foreach ($category->posts as $post)
    <div class="col-md-3 col-6">
        <div class="card">
            <a href="{{ route('categories.show', $category->id) }}">
                <img class="card-img-top img-fluid" src="{{ $post->image_url }}" alt="Blog Post pic">
            </a>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('posts.show', $post->id) }}" class="blog-title-truncate text-body-heading">
                        {{ $post->title }}
                    </a>
                </h5>
            </div>
        </div>
    </div>
@endforeach

{{-- <h3 class="h4 mb-3">
    <a class="post-title" href="post-details.html">Advice From a Twenty Something</a>
</h3> --}}
