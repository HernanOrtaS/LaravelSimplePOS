<?php

namespace App\Classes\Customer;
use App\Models\Customer;

class GetCustomer
{
    /**
     * Create a new class instance.
     */
    public function getCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();
        return $customer;
    }
}
