@extends('layouts.main')

@push('page_title')
    {{ __('app.status.index') }}
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active">{{ __('app.status.index') }}</li>
@endpush

@section('content')
    <livewire:status.status-list />
@endsection
