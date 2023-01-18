@extends('layouts.dashboard')

@section('title', $category->name)

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Categories</li>
<li class="breadcrumb-item active">{{ $category->name }}</li>
@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>العنوان</th>
            <th>الحالة</th>
            <th>تاريخ الانشاء </th>

        </tr>
    </thead>
    <tbody>

        @forelse($posts as $post)
        <tr>
            <td><img src="{{ asset( $post->image) }}" alt="" height="50"></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->status }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3"> لا يوجد مقالات</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $posts->links() }}

@endsection
