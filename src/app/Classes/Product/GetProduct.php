<?php

namespace App\Classes\Product;
use App\Models\Product;

class GetProduct
{
    /**
     * Create a new class instance.
     */
    public function getProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return $product;
    }
}
