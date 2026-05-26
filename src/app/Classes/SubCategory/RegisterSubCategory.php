<?php

namespace App\Classes\SubCategory;
use App\Models\SubCategory;

class RegisterSubCategory
{
    /**
     * Create a new class instance.
     */
    public function saveRegister (array $data)
    {
        return SubCategory::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'category_id' => $data['category_id'],
        ]);
    }
}
