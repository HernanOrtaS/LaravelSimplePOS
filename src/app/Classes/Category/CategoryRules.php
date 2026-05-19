<?php

namespace App\Classes\Category;

class CategoryRules
{
    /**
     * Create a new class instance.
     */
    public static function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'user_id' => 'required'
        ];
    }
}
