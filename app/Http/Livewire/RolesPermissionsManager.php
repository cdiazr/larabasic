<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Http\Livewire\Role\Edit;
use Spatie\Permission\Models\Permission;

class RolesPermissionsManager extends Component
{
    public $idRole;
    public $role = [];
    public $permissions = [];
    public $rolePermissions = [];

    public function mount()
    {
        $this->role = Role::find($this->idRole);
        $this->permissions = $this->build_permissions_by_module();
        $this->loadRolePermissions();
        //logger()->info('Role Permissions:', $this->rolePermissions);
    }

    public function loadRolePermissions()
    {
        $this->rolePermissions = [];

        foreach ($this->permissions as $key => $items) {
            foreach($items as $item)
                $this->rolePermissions[$this->role['id']][$item['permission_id']] = $this->role->hasPermissionTo($item['permission']);
        }
    }

    public function editRole($roleId)
    {
        $this->emit('editRole', $roleId);
    }

    public function updateRolePermissions($roleId, $permissionId, $isChecked)
    {
        $role = Role::findById($roleId);
        $permission = Permission::findOrFail($permissionId);

        if ($isChecked) {
            $role->givePermissionTo($permission);
        } else {
            $role->revokePermissionTo($permission);
        }
    }

    public function render()
    {
        return view('livewire.roles-permissions-manager', ['id' => $this->idRole]);
    }

    private function build_permissions_by_module()
    {
        $array = [];
        $permissions = Permission::all();

        foreach ($permissions as $permit){
            $explode = explode(' ', $permit['name']);
            $array[$explode[0]][] = [
                'permission_id' => $permit['id'],
                'name' => $explode[1],
                'permission' => $permit
            ];
        }

        return $array;
    }
}
