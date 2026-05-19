<?php

namespace App\Classes\Category;
use App\Models\Category;

class GetCategory
{
    /**
     * Create a new class instance.
     */
    public function getCategory($id)
    {
        $category = Category::where('id', $id)->first();
        return $category;
    }
}
