<?php

namespace App\Classes\Customer;
use App\Models\Customer;

class RegisterCustomer
{
    /**
     * Create a new class instance.
     */
    public function saveRegister (array $data)
    {
        return Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'user_id' => $data['user_id'],
        ]);
    }
}
