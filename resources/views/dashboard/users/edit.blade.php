@extends('layouts.dashboard')

@section('title', 'تحديث المستخدم')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المستخدمين</li>
    <li class="breadcrumb-item active">تحديث المستخدم</li>
@endsection

@section('content')

    <x-alert type="success" />
    <x-alert type="errors" />


    <form action="{{ route('dashboard.users.update-password', $user->id) }}" method="post">
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
                <x-form.input label=" كلمة السر القديمة" type="password"  name="current_password" required />
            </div>

            <div class="form-group">
                <x-form.input label=" كلمة السر الجديدة" type="password"  name="password" required />
            </div>

            <div class="form-group">
                <x-form.input label="تأكيد كلمة السر الجديدة " type="password"  name="password_confirmation" required />
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">تحديث كلمة السر</button>
            </div>

            {{-- <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" name="current_password" id="current_password" required>
                @error('current_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Password</button> --}}
        </form>


    </div>

@endsection
