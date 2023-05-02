<div>
    @if ($showToast)
        <script>
            toastr.success('Registro actualizado exitosamente');
            console.log('El código JS para mostrar el toast se está ejecutando')
        </script>
    @endif
    <label for="">{{ __('app.fields.name') }}</label>
        Toastr: {{ $showToast? 1 : 0 }}
    <form wire:submit.prevent="update">
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-users-cog"></i></span>
                    </div>
                    <input type="text" class="form-control" id="name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-9">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="name" wire:model="display">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <button type="submit" class="btn-appended">{{ __('app.actions.save') }}</button>
                        </span>
                    </div>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </form>
</div>


