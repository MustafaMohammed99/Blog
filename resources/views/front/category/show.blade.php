@extends('layouts.front')

@section('title', $category->name)

@section('content')
    <!-- BEGIN: Content-->
    <div class="content-wrapper">

        <div class="content-detached content-left">
            <div class="content-body">

                <!-- Blog List -->
                <div class="blog-list-wrapper">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">{{$category->name}}</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">

                                <x-front.post :category="$category" />

                            </div>
                        </div>

                    </div>
                </div>
                <!--/ Blog List -->

            </div>
        </div>


        <div class="sidebar-detached sidebar-right">
            <x-front.right-page :posts="$recentPosts" title="احدث المقالات" />
        </div>
    </div>
    <!-- END: Content-->
@endsection
