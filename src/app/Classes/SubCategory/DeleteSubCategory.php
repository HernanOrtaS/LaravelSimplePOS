<?php

namespace App\Classes\SubCategory;

use App\Models\SubCategory;

class DeleteSubCategory
{
    /**
     * Create a new class instance.
     */
    public function deleteSubCategory($id)
    {
        $subCategory = SubCategory::where('id', $id)->first();
        $subCategory->deleteOrFail();
    }
}
