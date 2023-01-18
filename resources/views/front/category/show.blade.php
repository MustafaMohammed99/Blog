@extends('layouts.front')

@section('title', $category->name)

@section('content')
    <!-- BEGIN: Content-->

    <section class="section">
        <div class="py-4"></div>
        <div class="container">
            <div class="row justify-content-center">
                <aside class="col-lg-8 ">
                    <x-front.posts-right-page :posts="$category->posts" :title="$category->name" />
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
