@extends('layouts.front')

@section('title', "نتائج البحث عن $search")

@section('content')

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">نتائج البحث عن
                        <mark>{{ $search }}</mark>
                    </h1>
                </div>
                <div class="col-lg-10">
                    <article class="card mb-4">
                        <div class="row card-body">
                            @foreach ($posts as $post)
                                <div class="col-12">
                                    <h3 class="h4 mb-3">
                                        <a class="post-title"
                                            href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                    </h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <a href="{{ route('home') }}">الصفحة الرئيسية</a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a href="{{ route('categories.show',$post->category->id) }}"> {{ $post->category->name }}</a>
                                        </li>

                                        <li class="list-inline-item">
                                            {{-- {!! str_replace($search, '<b>' . $search . '</b>', $post->title)  !!} --}}
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-calendar"></i>{{ $post->created_at }}
                                        </li>
                                    </ul>

                                    <img src="{{ $post->image_url }}" alt="Blog Post pic" width="70" height="70"
                                        style="float:right">
                                    @php
                                        $start = mb_strpos($post->description, $search) - 5;
                                        $start = max($start, 0); // limit the start to be at least 0
                                        $match = mb_substr($post->description, $start);
                                        $limited = Illuminate\Support\Str::words($match, 15);
                                    @endphp
                                    {{-- <p>{!! Illuminate\Support\Str::limit($post->description, 5) !!}</p> --}}
                                    <p>
                                        {!! str_replace($search, '<b>' . $search . '</b>', $limited) !!}
                                    </p>
                                    {{-- <p>{!! str_replace($statement_search, '<strong>' . $statement_search . '</strong>', $post->description) !!}</p> --}}
                                    {{-- <p>{!! str_replace($search, '<strong>' . $search . '</strong>', Illuminate\Support\Str::words($post->description, 5)) !!}</p> --}}
                                    <br />
                                </div>
                            @endforeach



                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
