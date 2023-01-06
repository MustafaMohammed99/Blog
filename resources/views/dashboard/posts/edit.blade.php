@extends('layouts.dashboard')

@section('title', 'تعديل المقالة')

@section('breadcrumb')
@parent
<li class="breadcrumb-item">المقالات</li>
<li class="breadcrumb-item active">تعديل المقالة</li>
@endsection

@section('content')

<form action="{{ route('dashboard.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    @include('dashboard.posts._form', [
        'button_label' => 'تحديث'
    ])
</form>

@endsection
