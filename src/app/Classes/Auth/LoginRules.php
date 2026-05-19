<?php

namespace App\Classes\Auth;

class LoginRules
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
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:30',
        ];
    }
}
