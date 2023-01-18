     <!-- recent post -->
     <div class="widget">
        <h4 class="widget-title">المقالات الحديثة</h4>
        <!-- post-item -->
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 col-6 mb-3">
                    <div class="card">
                        <a href="{{ route('posts.show', $post->id) }}">
                            <img width="70" height="70" class="card-img-top img-fluid"
                                src="{{ $post->image_url }}" alt="Blog Post pic">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('posts.show', $post->id) }}" class="post-title">
                                    {{ $post->title }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
