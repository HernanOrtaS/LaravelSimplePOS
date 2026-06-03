<?php

namespace App\Classes\Category;
use App\Models\Category;

class PatchCategory
{
    /**
     * Create a new class instance.
     */
    public function patchRegister (array $data, int $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => $data['user_id'],
        ]);

        return $category;
    }
}
