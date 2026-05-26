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
        return SubCategory::where('id', $id)->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
            'category_id' => $data['category_id'],
        ]);
    }
}
