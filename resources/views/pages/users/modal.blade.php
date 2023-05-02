<div class="row">
    <div class="col-12">
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
</div>

<div class="row">
    <div class="col-12">
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
        </form>
    </div>
</div>
