<div class="col-lg-12 mb-5">
    <h2 style="text-align: right;" class="h5 section-title">{{$title}}</h2>
    <section id="component-swiper-centered-slides">
        <div class="card bg-transparent shadow-none">
            <div class="card-body">
                <div
                    class="swiper-centered-slides swiper-container p-1 swiper-container-initialized swiper-container-horizontal swiper-container-rtl">
                    <div class="swiper-wrapper"
                        style="transition: all 0ms ease 0s; transform: translate3d(-350px, 0px, 0px);"
                        id="swiper-wrapper-91d472c866cb9043" aria-live="polite">
                        @php
                            $count_latest = count($posts);
                        @endphp
                        @foreach ($posts as $key => $post)
                            <article class="swiper-slide rounded swiper-shadow " style="margin-left: 30px;"
                                role="group" aria-label="{{ $key }} / {{ $count_latest }}">

                                <img src="{{ $post->image_url }}" alt="Blog Post pic" class="rounded"
                                    width="120" height="120">
                                <div class="swiper-text pt-md-1 pt-sm-50">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        {{ $post->title }}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>


                    <!-- Add Arrows -->
                    <div  class="swiper-button-next" tabindex="0" role="button"
                        aria-label="Next slide" aria-controls="swiper-wrapper-91d472c866cb9043"
                        aria-disabled="false"></div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Previous slide" aria-controls="swiper-wrapper-91d472c866cb9043"
                        aria-disabled="true"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </section>
</div>
