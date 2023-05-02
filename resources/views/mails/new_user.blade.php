@extends('mails.base')

@section('content')
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <h1>{{ __('mails.user.new.h1') }}</h1>
                <h2>{{ __('mails.user.new.h2') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{ __('mails.user.new.step_1') }}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success" href="http://arbibot.test/verify/{{ $code }}">{{ __('mails.user.new.link') }}</a>
            </div>
        </div>
    </div>
@endsection
