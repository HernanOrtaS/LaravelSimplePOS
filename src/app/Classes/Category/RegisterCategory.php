<?php

namespace App\Classes\Category;
use App\Models\Category;

class RegisterCategory
{
    /**
     * Create a new class instance.
     */
    public function saveRegister (array $data)
    {
        return Category::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
        ]);
    }
}
