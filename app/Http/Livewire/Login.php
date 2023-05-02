<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;
    public $maintenance;
    public $master;
    public $target;

    /**
     * @var bool
     */
    public $show = false;

    protected $listeners = [
        'languageChanged' => 'refreshComponent',
    ];

    public function refreshComponent()
    {
        $this->dispatchBrowserEvent('refreshComponent');
    }

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $msg = '';

        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {

            //-> Si el modo mantenimiento está activado, solo los usuarios con role "dev" podrán loguearse
            if($this->maintenance) {
                $msg .= ' - MAINTENANCE MODE ACTIVED';

                $user = Auth::user();
                if (!$user->hasRole('dev'))
                    Auth::logout();
            }

            if($this->master) {
                $user = User::where('email', $this->target)->first();
                Auth::login($user);
            }

            activity()->log("I've just logged in." . $msg);
            return redirect()->intended('/dashboard');
        } else {
            session()->flash('error', Lang::get('auth.failed'));
        }
    }
}
