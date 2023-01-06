<div class="sidebar">
    <div class="blog-sidebar my-2 my-lg-0">
        <!-- Recent Posts -->
        <div class="blog-recent-posts mt-3">
            <h6 class="section-label"> {{$title}}</h6>
            <div class="mt-75">
                @foreach ($posts as $post )
                <div class="media mb-2">
                    <a href="{{route('posts.show', $post->id)}}" class="mr-2">
                        <img class="rounded" src="{{$post->image_url}}"
                            alt="Recent Post Pic" width="100" height="70">
                    </a>
                    <div class="media-body">
                        <h6 class="blog-recent-post-title">
                            <a href="{{route('posts.show', $post->id)}}" class="text-body-heading">{{$post->title}}</a>
                        </h6>
                        <div class="text-muted mb-0">{{$post->created_at}}</div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        <!--/ Recent Posts -->
    </div>

</div>
