@extends('layouts.main')

@push('page_title')
    {{ __('app.users.index') }}
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active">{{ __('app.users.index') }}</li>
@endpush

@section('content')
    @livewire('user.user-list')
@endsection
