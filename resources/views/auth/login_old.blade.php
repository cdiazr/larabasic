@extends('layouts.guest')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            {{ env('APP_NAME') }} v{{ env('APP_VERSION') }}
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('app.forms.titles.login') }}</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="{{ __('app.fields.email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="{{ __('app.fields.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text show-pass">
                                <span class="fas fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember_me" value="0" id="remember">
                                <label for="remember">
                                    {{ __('app.fields.remember') }}
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('app.actions.signin') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                {{--<div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> {{ __('app.actions.social.signin.facebook') }}
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> {{ __('app.actions.social.signin.google_plus') }}
                    </a>
                </div>--}}
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">{{ __('app.links.forgot') }}</a>
                </p>
                <p class="mb-0">
                    <a href="/register" class="text-center">{{ __('app.links.register') }}</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.show-pass').val();
        });
    </script>
@endpush
