<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\BaseComponent;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends BaseComponent
{
    use WithPagination;

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('username', 'like', '%' . $this->search . '%')
            ->with('roles')
            ->paginate($this->size);

        return view('livewire.user.user-list', ['users' => $users]);
    }
}
