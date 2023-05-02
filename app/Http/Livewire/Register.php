<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\Rule;
use App\Models\User;

use Spatie\Permission\Models\Role;

class Register extends BaseComponent
{
    public $name;
    public $email;
    public $password;
    public $username;
    public $passwordConfirmation;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email'),
            ],
            'password' => 'required|string|min:8|same:passwordConfirmation',
        ];
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'verification_code' => bin2hex(random_bytes(32))
        ]);


        // Asigna el rol al usuario recién creado
        $role = Role::findByName('Usuario');
        $user->assignRole($role);

        activity()->log("I've just created a new account");
        session()->flash('success', Lang::get('app.notificacions.register.success'));

        //TODO: enviar verificar cuenta mediante correo

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
