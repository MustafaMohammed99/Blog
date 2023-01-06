@extends('layouts.front')

@section('title', $post->title)

@section('content')
    <!-- BEGIN: Content-->
    <div class="content-wrapper">
        <div class="content-header row">


        </div>

        <div class="content-detached content-left">
            <div class="content-body">
                <div class="content-header-left  mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    @if ($post->category->parent->name !== '-')
                                    <li class="breadcrumb-item">
                                        {{$post->category->parent->name}}
                                        {{-- <a href="{{route('categories.show', $post->category->parent->id)}}">{{$post->category->parent->name}}</a> --}}
                                    </li>
                                    @endif
                                    <li class="breadcrumb-item"><a href="{{route('categories.show', $post->category->id)}}">{{$post->category->name}}</a>
                                    </li>

                                    <li class="breadcrumb-item active">{{$post->title}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">
                                {{-- width="614" height="292" --}}
                                <img src="{{ $post->image_url }}" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                <div class="card-body">
                                    <h4 class="card-title">{{ $post->title }}</h4>


                                    @if ($tags->count() > 0)
                                        <div class="my-1 py-25">
                                            <small class="text-muted mr-25">الوسوم</small>

                                            <span class="text-muted ml-50 mr-25">|</span>

                                            @foreach ($tags->tags as $tag)
                                                <a href="javascript:void(0);">
                                                    <div class="badge badge-pill badge-light-warning">{{ $tag->name }}
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif


                                    {!! $post->description !!}

                                    <div class="media">
                                        <div class="media-body">
                                            <small class="text-muted mr-25">by</small>
                                            <small><a href="javascript:void(0);" class="text-body">Ghani
                                                    Pradita</a></small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted">Jan 10, 2020</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->

                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>

        <div class="sidebar-detached sidebar-right">
            <x-front.right-page :posts="$recentPosts" title="احدث المقالات" />
        </div>
    </div>
    <!-- END: Content-->
@endsection
