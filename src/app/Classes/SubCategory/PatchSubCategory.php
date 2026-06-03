<?php

namespace App\Classes\SubCategory;
use App\Models\SubCategory;

class PatchSubCategory
{
    /**
     * Create a new class instance.
     */
    public function patchRegister (array $data, int $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'category_id' => $data['category_id'],
        ]);
        
        return $subCategory;
    }
}
