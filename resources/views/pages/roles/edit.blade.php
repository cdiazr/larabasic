@extends('layouts.main')

@push('page_title')
    {{ __('app.roles.edit') }}
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active"><a href="{{ route('role.index') }}">{{ __('app.roles.index') }}</a></li>
@endpush

@section('content')
    <livewire:roles-permissions-manager :idRole="$id"/>
@endsection
