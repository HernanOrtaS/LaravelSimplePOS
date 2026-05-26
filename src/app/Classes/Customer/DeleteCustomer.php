<?php

namespace App\Classes\Customer;

use App\Models\Customer;

class DeleteCustomer
{
    /**
     * Create a new class instance.
     */
    public function deleteCustomer($id)
    {
        $customer = Customer::where('id', $id)->first();
        $customer->deleteOrFail();
    }
}
