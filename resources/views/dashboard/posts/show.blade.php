@extends('layouts.dashboard')

@section('title', $user->name)

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المستخدم</li>
    <li class="breadcrumb-item active">{{ $user->name }}</li>
@endsection

@section('content')

    <table class="table">
        <thead>
            <tr>
            <tr>
                <th></th>
                @can('posts.delete')
                    <th>الكاتب</th>
                @endcan
                <th>العنوان</th>
                <th>القسم</th>
                <th>الحالة</th>
                <th>عدد الزوار</th>
                <th>تاريخ الانشاء</th>
                <th colspan="3">العمليات</th>
            </tr>

            </tr>
        </thead>
        <tbody>

            @forelse($posts as $post)
                <tr>
                    <td><img src="{{ $post->image_url }}" alt="" height="50"></td>
                    @can('posts.delete')
                        <td><a href="{{ route('dashboard.users.show', $post->id) }}">{{ $post->user->name }}</a></td>
                    @endcan

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name ?? 'محذوف' }}</td>
                    <td>{{ $post->status == 'active' ? 'فعالة' : ($post->status == 'archived' ? 'مؤرشفة' : 'مسودة') }}
                    </td>

                    <td>{{ $post->count_visitor }}</td>
                    <td>{{ $post->created_at }}</td>
                    @can('posts.delete')
                        <td>
                            <button data-id="{{ $post->id }}" class="operation_status btn btn-sm btn-outline-primary">تغير
                                الحالة</button>
                        </td>
                    @endcan
                    <td>
                        <a href="{{ route('dashboard.posts.edit', $post->id) }}"
                            class="btn btn-sm btn-outline-success">تعديل</a>
                    </td>
                    <td>
                        @can('posts.destroy')
                            <form action="{{ route('dashboard.posts.destroy', $post->id) }}" method="post">
                                @csrf
                                <!-- Form Method Spoofing -->
                                <input type="hidden" name="_method" value="delete">
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                            </form>
                        @endcan
                    </td>
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
