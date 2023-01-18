@extends('layouts.dashboard')

@section('title', 'سلة محذوفات المستخدمين')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">المستخدمين</li>
    <li class="breadcrumb-item active">سلة المحذوفات</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('dashboard.users.index') }}" class="btn btn-sm btn-outline-primary">رجوع</a>
    </div>

    <x-alert type="success" />
    <x-alert type="info" />

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
        <x-form.input name="name" placeholder="Name" class="mx-2" :value="request('name')" />
        <select name="type" class="form-control mx-2">
            <option value="">All</option>
            <option value="admin" @selected(request('type') == 'admin')>Admin</option>
            <option value="user" @selected(request('type') == 'user')>User</option>
        </select>
        <button class="btn btn-dark mx-2">تصفية </button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>المعرف</th>
                <th>الاسم</th>
                <th>النوع</th>
                <th>تاريخ الانشاء</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ route('dashboard.users.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->deleted_at }}</td>
                    <td>
                        <form action="{{ route('dashboard.users.restore', $user->id) }}" method="post">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-sm btn-outline-info">ارجاع</button>
                        </form>

                    </td>
                    <td>
                        <form action="{{ route('dashboard.users.force-delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">حذف نهائي</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">لا يوجد مستخدميت.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->withQueryString()->appends(['search' => 1])->links() }}

@endsection
