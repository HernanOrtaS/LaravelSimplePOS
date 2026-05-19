<?php

namespace App\Livewire\Guest\Forms;

use App\Classes\Action\RegisterUser;
use App\Classes\Auth\RegisterRules;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $first_name, $last_name, $email, $password;

    public function register()
    {
        $validated = $this->validate(RegisterRules::rules());
        $newUser = new RegisterUser();
        $user = $newUser->saveRegister($validated);

        Auth::login($user);
        return redirect()->route('user.dashboard');
    }

    public function render()
    {
        return view('livewire.guest.forms.register');
    }
}
