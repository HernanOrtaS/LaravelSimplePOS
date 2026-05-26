<?php

namespace App\Classes\SubCategory;
use App\Models\SubCategory;

class GetSubCategory
{
    /**
     * Create a new class instance.
     */
    public function getSubCategory($id)
    {
        $subCategory = SubCategory::where('id', $id)->first();
        return $subCategory;
    }
}
