    <h2 style="text-align: right; left:0;" class="h5 section-title">{{ $title }}</h2>
    <div class="row">

        @foreach ($posts as $post)
            <div class="col-md-4 col-6">
                <article class="card mb-4">
                    <div class="post-slider slider-sm slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 224px; height:150px; transform: translate3d(0px, 0px, 0px);">
                                <img src="{{ $post->image_url }}"
                                    class="card-img-top slick-slide slick-current slick-active" alt="post-thumb"
                                    data-slick-index="0" aria-hidden="false" style="width: 224px;" tabindex="0">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="h4 mb-1">
                            <a class="post-title" href="{{ route('posts.show', $post->id) }}">{{ $post->title }} </a>
                        </h3>
                        <i class="ti-calendar mb-1">{{ $post->created_at }}</i>

                        <ul class="card-meta-tag list-inline" style="padding: 5">
                            @foreach ($post->tags as $tag)
                                <li class="list-inline-item"><a>{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </div>
        @endforeach

    </div>
