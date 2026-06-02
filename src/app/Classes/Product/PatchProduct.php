<?php

namespace App\Classes\Product;
use App\Models\Product;

class PatchProduct
{
    /**
     * Create a new class instance.
     */
    public function patchRegister (array $data, int $id)
    {
        return Product::where('id', $id)->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'current_price' => $data['current_price'],
            'user_id' => $data['user_id'],
            'sub_category_id' => $data['sub_category_id'],
        ]);
    }
}
