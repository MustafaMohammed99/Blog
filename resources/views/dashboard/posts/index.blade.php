@extends('layouts.dashboard')

@section('title', 'المقالات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المقالات</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('dashboard.posts.create') }}" class=" btn btn-sm btn-outline-primary mr-2 ">إنشاء</a>
        @can('posts.trash')
            <a href="{{ route('dashboard.posts.trash') }}" class="btn btn-sm btn-outline-dark">سلة المحذوفات</a>
        @endcan
    </div>

    <x-alert type="success" />
    <x-alert type="info" />

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
        <x-form.input name="title" placeholder="Title" class="mx-2" :value="request('title')" />
        <select name="status" class="form-control mx-2">
            <option value="">الكل</option>
            <option value="active" @selected(request('status') == 'active')>الفعالة</option>
            <option value="archived" @selected(request('status') == 'archived')>المؤرشفة</option>
            <option value="draft" @selected(request('status') == 'draft')>الغير فعالة</option>
        </select>
        <button class="btn btn-dark mx-2">فلترة</button>
    </form>

    <table class="table">
        <thead>
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
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td><img src="{{ $post->image_url }}" alt="" height="50"></td>
                    @can('posts.delete')
                    <td><a href="{{ route('dashboard.users.show', $post->user->id) }}">{{ $post->user->name }}</a></td>
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
                    <td colspan="9">No Posts defined.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $posts->withQueryString()->appends(['search' => 1])->links() }}

@endsection


@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).on('click', '.operation_status', function(e) {
            e.preventDefault();
            let post_id = $(this).data("id");
            var url = '{{ route('dashboard.posts.status', ['post' => ':post', 'status' => ':status']) }}';
            url = url.replace(':post', post_id);

            Swal.fire({
                title: ' تغير حالة المقالة إلى: ',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'فعالة',
                denyButtonText: `مؤرشفة`,
                cancelButtonText: "إلغاء"

            }).then((result) => {
                let isChangeStatus = false;
                if (result.isConfirmed) {
                    isChangeStatus = true;
                    url = url.replace(':status', 'active');
                } else if (result.isDenied) {
                    isChangeStatus = true;
                    url = url.replace(':status', 'archived');
                }
                if (isChangeStatus) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'PUT',
                        },
                        success: function(response) {
                            console.log(response);
                            Swal.fire(
                                'تحديث!',
                                response.success,
                                'success'
                            )
                        }
                    });
                }
            }); //
        }); //
    </script>
@endpush
