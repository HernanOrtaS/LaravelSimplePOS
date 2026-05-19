<?php

namespace App\Classes\Action;

use App\Models\User;

class RegisterUser
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function saveRegister (array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }
}
