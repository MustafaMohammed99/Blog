@extends('layouts.front')

@section('title', 'النهضة نت')

@push('styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/vendors/css/extensions/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dashboard/app-assets/css-rtl/plugins/extensions/ext-component-swiper.css') }}">
@endpush


@section('content')
    <div class="content-detached content-left">

        <div class="content-body">

            <div class="row ">
                <div class="col-12 my-1">

                    <section id="component-swiper-centered-slides">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-header">
                                <h4 class="card-title">احدث المقالات</h4>
                            </div>
                            <div class="card-body">
                                <div
                                    class="swiper-centered-slides swiper-container p-1 swiper-container-initialized swiper-container-horizontal swiper-container-rtl">
                                    <div class="swiper-wrapper"
                                        style="transition: all 0ms ease 0s; transform: translate3d(-350px, 0px, 0px);"
                                        id="swiper-wrapper-91d472c866cb9043" aria-live="polite">
                                        @php
                                            $count_latest = count($latest_posts);
                                        @endphp
                                        @foreach ($latest_posts as $key => $post)
                                            <div class="swiper-slide rounded swiper-shadow " style="margin-left: 30px;"
                                                role="group" aria-label="{{ $key }} / {{ $count_latest }}">

                                                <img src="{{ $post->image_url }}" alt="Blog Post pic" class="rounded"
                                                    width="120" height="120">
                                                <div class="swiper-text pt-md-1 pt-sm-50">
                                                    <a href="{{ route('posts.show', $post->id) }}">
                                                        {{ $post->title }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                        aria-controls="swiper-wrapper-91d472c866cb9043" aria-disabled="false"></div>
                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                                        aria-label="Previous slide" aria-controls="swiper-wrapper-91d472c866cb9043"
                                        aria-disabled="true"></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="collapse-border" id="accordionExample0">
                <h4 class="card-title">التصنيفات</h4>

                <div class="row ">

                    @foreach ($tree_parents as $key => $name_parent)
                        <div class="col-md-3 my-1">
                            <div class="card ">
                                <div class="card-header " id="heading230" data-toggle="collapse" role="button"
                                    data-target="#collapse{{ $key }}" aria-expanded="false"
                                    aria-controls="collapse{{ $key }}">
                                    <h4>{{ $name_parent['name'] }}</h4>
                                </div>
                                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading230"
                                    data-parent="#accordionExample0">
                                    <div class="card-body">
                                        <ul style="list-style-type: none;" class="category-items" itemprop="categoryItems">
                                            @foreach ($name_parent['children'] as $key => $category)
                                                <h6>
                                                    <li><a href="{{ route('categories.show', $category->id) }}">
                                                            {{ $category->name }}</a>
                                                    </li>
                                                </h6>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>

    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/dashboard/app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/app-assets/js/scripts/extensions/ext-component-swiper.js') }}"></script>
@endpush


{{--
        <div class="swiper-wrapper"
                                        style="transition: all 0ms ease 0s; transform: translate3d(-350px, 0px, 0px);"
                                        id="swiper-wrapper-91d472c866cb9043" aria-live="polite">

                                        <div class="swiper-slide rounded swiper-shadow swiper-slide-active"
                                            style="margin-left: 30px;" role="group" aria-label="1 / 5">

                                            <img src="http://127.0.0.1:8000/uploads/posts/EiyTulSEl1u4oBLIQSpeXvvIYRfMaWe72xQbUyDV.jpg"
                                                alt="Blog Post pic" class="rounded" width="120" height="120">
                                            <div class="swiper-text pt-md-1 pt-sm-50">Getting Started</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow "
                                            style="margin-left: 30px;" role="group" aria-label="2 / 5">
                                            <img src="http://127.0.0.1:8000/uploads/posts/TL1vGP9xk9Rle0md4ihm0zsaDBxy1qlR70nvsFMj.jpg"
                                                alt="Blog Post pic" class="rounded" width="120" height="120">
                                            <div class="swiper-text pt-md-1 pt-sm-50">Pricing &amp; Plans</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow" style="margin-left: 30px;"
                                            role="group" aria-label="3 / 5">
                                            <img src="http://127.0.0.1:8000/uploads/posts/TL1vGP9xk9Rle0md4ihm0zsaDBxy1qlR70nvsFMj.jpg"
                                                alt="Blog Post pic" class="rounded" width="120" height="120">
                                            <div class="swiper-text pt-md-1 pt-sm-50">Sales Question</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow" style="margin-left: 30px;"
                                            role="group" aria-label="4 / 5">
                                            <img src="http://127.0.0.1:8000/uploads/posts/TL1vGP9xk9Rle0md4ihm0zsaDBxy1qlR70nvsFMj.jpg"
                                                alt="Blog Post pic" class="rounded" width="120" height="120">
                                            <div class="swiper-text pt-md-1 pt-sm-50">Usage Guides</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow" style="margin-left: 30px;"
                                            role="group" aria-label="5 / 5">
                                            <img src="http://127.0.0.1:8000/uploads/posts/TL1vGP9xk9Rle0md4ihm0zsaDBxy1qlR70nvsFMj.jpg"
                                                alt="Blog Post pic" class="rounded" width="120" height="120">
                                            <div class="swiper-text pt-md-1 pt-sm-50">General Guide</div>
                                        </div>
                                    </div>
    --}}
