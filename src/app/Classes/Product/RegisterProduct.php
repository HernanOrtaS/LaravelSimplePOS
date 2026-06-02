<?php

namespace App\Classes\Product;
use App\Models\Product;

class RegisterProduct
{
    /**
     * Create a new class instance.
     */
    public function saveRegister (array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'sub_category_id' => $data['sub_category_id'],
            'current_price' => $data['current_price'],
        ]);
    }
}
