<?php

namespace App\Classes\Product;

class ProductRules
{
    /**
     * Create a new class instance.
     */
    public static function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'user_id' => 'required|integer|min:1',
            'sub_category_id' => 'required|integer|min:1'
        ];
    }
}
