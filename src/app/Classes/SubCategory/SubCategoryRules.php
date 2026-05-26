<?php

namespace App\Classes\SubCategory;

class SubCategoryRules
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
            'category_id' => 'required|integer|min:1'
        ];
    }
}
