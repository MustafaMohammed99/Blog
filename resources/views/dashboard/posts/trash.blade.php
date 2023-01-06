@extends('layouts.dashboard')

@section('title', 'سلة المحذوفات ')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">المقالات</li>
    <li class="breadcrumb-item active">سلة المحذوفات</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('dashboard.posts.index') }}" class="btn btn-sm btn-outline-primary">Back</a>
    </div>

    <x-alert type="success" />
    <x-alert type="info" />

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
        <x-form.input name="title" placeholder="Title" class="mx-2" :value="request('title')" />
        <select name="status" class="form-control mx-2">
            <option value="">All</option>
            <option value="active" @selected(request('status') == 'active')>الفعالة</option>
            <option value="archived" @selected(request('status') == 'archived')>المؤرشفة</option>
            <option value="draft" @selected(request('status') == 'draft')>الغير فعالة</option>

        </select>
        <button class="btn btn-dark mx-2">Filter</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>المعرف</th>
                <th>الاسم</th>
                <th>القسم</th>
                <th>الحالة</th>
                <th>تاريخ الحذف</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td><img src="{{ $post->image_url }}" alt="" height="50"></td>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name ?? '' }}</td>
                    <td>{{ $post->status }}</td>
                    <td>{{ $post->deleted_at }}</td>
                    <td>
                        @can('posts.restore')
                            <form action="{{ route('dashboard.posts.restore', $post->id) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-sm btn-outline-info">استعادة</button>
                            </form>
                        @endcan
                    </td>
                    <td>
                        @can('posts.force-delete')
                            <form action="{{ route('dashboard.posts.force-delete', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">حذف نهائي</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No posts defined.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $posts->withQueryString()->appends(['search' => 1])->links() }}




@endsection

