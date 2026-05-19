<?php

namespace App\Livewire\Guest\Forms;

use App\Classes\Auth\LoginRules;
use Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login() 
    {
        $validated = $this->validate(LoginRules::rules());
        if (Auth::attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }
    }

    public function render()
    {
        return view('livewire.guest.forms.login');
    }
}
