<?php

namespace App\Classes\Category;

use App\Models\Category;

class DeleteCategory
{
    /**
     * Create a new class instance.
     */
    public function deleteCategory($id)
    {
        $category = Category::where('id', $id)->first();
        $category->deleteOrFail();
    }
}
