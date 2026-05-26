<?php

namespace App\Classes\Product;

use App\Models\Product;

class DeleteProduct
{
    /**
     * Create a new class instance.
     */
    public function deleteProduct($id)
    {
        $customer = Product::where('id', $id)->first();
        $customer->deleteOrFail();
    }
}
