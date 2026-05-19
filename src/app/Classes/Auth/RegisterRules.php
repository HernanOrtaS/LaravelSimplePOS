<?php

namespace App\Classes\Auth;

class RegisterRules
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function rules()
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:30',
        ];
    }
}
