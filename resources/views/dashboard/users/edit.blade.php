@extends('layouts.dashboard')

@section('title', 'تحديث المستخدم')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المستخدمين</li>
    <li class="breadcrumb-item active">تحديث المستخدم</li>
@endsection

@section('content')

    <x-alert type="success" />

    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post">
        @csrf
        @method('put')

        @include('dashboard.users._form', [
            'button_label' => 'تحديث',
        ])
    </form>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <form action="{{ route('dashboard.users.update-password') }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <x-form.input label=" كلمة السر القديمة" type="password" name="current_password" required />
            </div>

            <div class="form-group">
                <x-form.input label=" كلمة السر الجديدة" type="password" name="new_password" required />
            </div>

            <div class="form-group">
                <x-form.input label="تأكيد كلمة السر الجديدة " type="password" name="new_password_confirmation" required />
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">تحديث كلمة السر</button>
            </div>

        </form>
    </div>


@endsection
