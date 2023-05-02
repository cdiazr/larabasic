@extends('layouts.guest')

@section('content')
    <div class="login-box">
        <livewire:login :maintenance="$setting_maintenance" :master="$setting_master" :target="$setting_account_target"/>
    </div>
@endsection
