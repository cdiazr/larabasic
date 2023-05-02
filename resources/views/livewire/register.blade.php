<div>
    <div class="register-logo">
        {{ env('APP_NAME') }}
    </div>

    <div class="card">
        <div class="card-header">
            @error('username')
            <div class="alert alert-danger">
                <span class="text">{{ $message }}</span>
            </div>
            @enderror
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
        <div class="card-body register-card-body">
            @if($setting_languages)
            @livewire('language-switcher')<br>
            @endif
            <p class="login-box-msg">{{ __('app.forms.titles.register') }}</p>
            <form wire:submit.prevent="register" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" wire:model.defer="name" class="form-control" placeholder="{{ __('app.fields.full_name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="username" wire:model.defer="username" class="form-control" placeholder="{{ __('app.fields.username') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" wire:model.defer="email" class="form-control" placeholder="{{ __('app.fields.email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="{{ $show ? 'text' : 'password' }}" name="password" wire:model.defer="password" class="form-control" placeholder="{{ __('app.fields.password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text" wire:click="$toggle('show')">
                            <span class="fas {{ $show ? 'fa-eye-slash' : 'fa-eye' }}"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="{{ $showConfirm ? 'text' : 'password' }}" name="password_confirmation" wire:model.defer="passwordConfirmation" class="form-control" placeholder="{{ __('app.fields.password_re') }}">
                    <div class="input-group-append">
                        <div class="input-group-text" wire:click="$toggle('showConfirm')">
                            <span class="fas {{ $showConfirm ? 'fa-eye-slash' : 'fa-eye' }}"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="1">
                            <label for="agreeTerms">
                                {{ __('app.forms.checkboxes.terms', ['url' => '#']) }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('app.actions.signup') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    {{ __('app.actions.social.signup.facebook') }}
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    {{ __('app.actions.social.signup.google_plus') }}
                </a>
            </div>--}}

            <a href="/login" class="text-center">{{ __('app.links.login') }}</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
