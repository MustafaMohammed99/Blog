@extends('layouts.dashboard')

@section('title', 'المقالات')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">المقالات</li>
<li class="breadcrumb-item active">انشاء مقالة</li>

@endsection

@section('content')

<form action="{{ route('dashboard.posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('dashboard.posts._form')
</form>

@endsection


