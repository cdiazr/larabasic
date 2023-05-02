@extends('layouts.main')

@push('page_title')
    {{ __('app.roles.index') }}
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active">{{ __('app.roles.index') }}</li>
@endpush

@section('content')
    <livewire:role.role-list />
@endsection
