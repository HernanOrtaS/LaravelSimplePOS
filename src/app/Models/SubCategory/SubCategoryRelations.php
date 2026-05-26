<?php

namespace App\Models\SubCategory;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

trait SubCategoryRelations
{
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function product () {
        return $this->hasMany(Product::class);
    }
}
