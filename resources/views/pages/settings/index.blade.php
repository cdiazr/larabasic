@extends('layouts.main')

@push('page_title')
    {{ __('app.settings.index') }}
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active">{{ __('app.settings.index') }}</li>
@endpush

@section('content')
    @livewire('settings')
@endsection

@push('docReady')
    $('#maintenance_mode').change(function() {
        if ($(this).is(":checked")) {
            $('.main-header').removeClass("navbar-white").addClass("bg-danger");
        } else {
            $('.main-header').removeClass("bg-danger").addClass("navbar-white");
        }
    });
@endpush
