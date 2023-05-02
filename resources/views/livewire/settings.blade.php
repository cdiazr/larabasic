<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Modo mantenimiento
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" class="custom-control-input" id="maintenance_mode" wire:model="maintenance">
                                <label class="custom-control-label" for="maintenance_mode">Poner la aplicación en mantenimiento.</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        Si se activa este modo, solo los perfiles "dev" podrán acceder y seguir usando la aplicación y todos los usurios que esten activos en el momento que se active el modo mantenimiento, serán expulsados.
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Llave maestra
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" class="custom-control-input" id="master_key" wire:model="master">
                                <label class="custom-control-label" for="master_key">Poder entrar con cualquier cuenta.</label>
                            </div>
                        </div>
                        @if($master)
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Correo del usuario objetivo" wire:model="target">
                                </div>
                                <div class="col-12">
                                    <b>Usuario:</b> {{ $target }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="card-footer">
                        Si se activa este modo, el desarrollador podrá entrar en cualquier cuenta de usuario existente en la BBDD como si fuese el própio usuario y así poder replicar cualquier fallo que se produzca en su cuenta.
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Idiomas
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" class="custom-control-input" id="languages" wire:model="languages">
                                <label class="custom-control-label" for="languages">Activar idiomas</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Estilos
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h6><strong>Barra navegación</strong></h6>
                                <select wire:model="navbar" class="custom-select mb-3 text-light border-0 bg-white">
                                    @foreach(['bg-primary', 'bg-secondary', 'bg-info', 'bg-success', 'bg-danger', 'bg-indigo', 'bg-purple', 'bg-pink', 'bg-navy', 'bg-lightblue', 'bg-teal', 'bg-cyan', 'bg-dark', 'bg-gray-dark', 'bg-gray', 'bg-light', 'bg-warning', 'bg-white', 'bg-orange'] as $option)
                                        <option value="{{ $option }}" class="{{ $option }}" {{ $navbar == $option ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('bg-', '', $option)) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <h6><strong>Barra lateral</strong></h6>
                                <select wire:model="sidebar" class="custom-select mb-3 text-light border-0 bg-primary">
                                    <option>None Selected</option>
                                    @foreach(['bg-primary', 'bg-warning', 'bg-info', 'bg-danger', 'bg-success', 'bg-indigo', 'bg-lightblue', 'bg-navy', 'bg-purple', 'bg-fuchsia', 'bg-pink', 'bg-maroon', 'bg-orange', 'bg-lime', 'bg-teal', 'bg-olive'] as $option)
                                        <option value="{{ $option }}" class="{{ $option }}" {{ $sidebar == $option ? 'selected' : '' }}>
                                            {{ ucfirst(str_replace('bg-', '', $option)) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
