<div>
    <div class="login-logo">
        {{ env('APP_NAME') }} v{{ env('APP_VERSION') }}
    </div>

    <div class="card">
        <div class="card-header">
            @error('email')
            <div class="alert alert-danger">
                <span class="text">{{ $message }}</span>
            </div>
            @enderror
            @error('password')
            <div class="alert alert-danger">
                <span class="text">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="card-body login-card-body">
            @if($setting_languages)
            @livewire('language-switcher')<br>
            @endif
            @if($maintenance)
                Modo mantenimiento
            @endif
            <p class="login-box-msg">{{ __('app.forms.titles.login') }}</p>

            <form method="post" wire:submit.prevent="login">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" id="email" wire:model.defer="email" name="email" class="form-control" placeholder="{{ __('app.fields.email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="{{ $show ? 'text' : 'password' }}" id="password" wire:model.defer="password" name="password" class="form-control" placeholder="{{ __('app.fields.password') }}">
                    <div class="input-group-append" style="cursor: pointer">
                        <div class="input-group-text" wire:click="$toggle('show')">
                            <span class="fas {{ $show ? 'fa-eye-slash' : 'fa-eye' }}"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" wire:model.defer="remember" name="remember_me" value="0" id="remember">
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
