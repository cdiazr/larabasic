<?php

namespace App\Http\Livewire\Role;

use App\Http\Livewire\BaseComponent;
use App\Models\Role;

class RoleList extends BaseComponent
{
    public function render()
    {
        return view('livewire.role.role-list', ['roles' => Role::all()]);
    }
}
