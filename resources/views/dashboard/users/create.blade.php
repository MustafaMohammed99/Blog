@extends('layouts.dashboard')

@section('title', 'انشاء مستخدم')

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">المستخدم</li>
@endsection


@section('content')

<form action="{{ route('dashboard.users.store') }}" method="post">
    @csrf
    @include('dashboard.users._form')
</form>

@endsection
