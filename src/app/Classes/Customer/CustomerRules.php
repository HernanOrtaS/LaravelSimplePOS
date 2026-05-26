<?php

namespace App\Classes\Customer;

class CustomerRules
{
    /**
     * Create a new class instance.
     */
    public static function rules()
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:60',
            'phone_number' => 'required|string|max:20',
            'user_id' => 'required|integer|min:1',
        ];
    }
}
