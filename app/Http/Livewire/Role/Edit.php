<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $name;
    public $roleId;
    public $display;

    public $showToast = false;

    public function mount(Role $role)
    {
        $this->name = $role->name;
        $this->roleId = $role->id;
        $this->display = $role->display_name;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $this->roleId,
            'display_name' => 'required|string|max:255'
        ]);

        $role = Role::findById($this->roleId);
        $role->update(['name' => $validatedData['name'], 'display_name' => $validatedData['display_name']]);

        $this->showToast = true;

        /*sleep(5);
        $this->resetProperties();*/
        //return redirect()->to('/roles');
    }

    public function resetProperties()
    {
        $this->showToast = false;
    }

    public function render()
    {
        return view('livewire.role.edit');
    }
}
