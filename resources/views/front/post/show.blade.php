@extends('layouts.front')

@section('title', $post->title)

@section('content')
    <!-- BEGIN: Content-->
    <section class="section">
        <div class="py-4"></div>
        <div class="container">
            <div class="row justify-content-center">
                <aside class="col-lg-8 ">

                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="post-title breadcrumb-item "><a
                                            href="{{ route('categories.show', $post->category->id) }}">{{ $post->category->name }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ $post->title }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Detail -->
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $post->title }}</h4>
                                    @if ($tags->count() > 0)
                                            <ul class="card-meta-tag list-inline" >
                                                <small class="text-muted mr-25">الوسوم</small>

                                                <span class="text-muted ml-50 mr-25">|</span>
                                                @foreach ($tags->tags as $tag)
                                                    <li class="list-inline-item"><a>{{ $tag->name }}</a></li>
                                                @endforeach
                                            </ul>
                                    @endif
                                    <br/>
                                    <img src="{{ $post->image_url }}" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                    {!! $post->description !!}
                                    <div class="media">
                                        <div class="media-body">
                                            <small class="text-muted mr-25">by</small>
                                            <small><a href="javascript:void(0);"
                                                    class="text-body">{{ $post->user->name }}</a></small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted">{{ $post->created_at }}</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->
                    </div>
                    <!--/ Blog Detail -->
                </aside>

                <div class="col-lg-4 ">
                    <x-front.posts-left-page :posts="$recentPosts" />
                    <x-front.ctegories-left-page :categories="$categories" />
                </div>
            </div>
        </div>
    </section>





    <!-- END: Content-->
@endsection
