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
            <th>Name</th>
            <th>Store</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>

        @forelse($posts as $post)
        <tr>
            <td><img src="{{ asset( $post->image) }}" alt="" height="50"></td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->store->name }}</td>
            <td>{{ $post->status }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No products defined.</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $posts->links() }}

@endsection
