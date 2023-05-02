<div>
    <div class="card">
        <div class="card-header">
            @livewire('role.edit', ['role' => $role])
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($permissions as $key => $permissions)
                    <div class="col-2">
                        <div class="card">
                            <div class="card-header">{{ ucfirst($key) }}</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($permissions as $p)
                                        <div class="col-12">
                                            <input type="checkbox" wire:model="rolePermissions.{{ $role->id }}.{{ $p['permission_id'] }}"
                                                   wire:change="updateRolePermissions({{ $role->id }}, {{ $p['permission_id'] }}, $event.target.checked)"
                                                {{ $role->hasPermissionTo($p['permission']) ? 'checked' : '' }}> {{ $p['name'] }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{--<table class="table">
        <thead>
        <tr>
            <th>Role</th>
            @foreach($permissions as $permission)
                <th>{{ $permission->name }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            @if($role->id == $id)
            <tr>
                <td>{{ $role->name }}</td>
                @foreach($permissions as $permission)
                    <td>
                        <input type="checkbox" wire:model="rolePermissions.{{ $role->id }}.{{ $permission->id }}"
                               wire:change="updateRolePermissions({{ $role->id }}, {{ $permission->id }}, $event.target.checked)"
                            {{ $role->hasPermissionTo($permission) ? 'checked' : '' }}>
                    </td>
                @endforeach
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>--}}
</div>
