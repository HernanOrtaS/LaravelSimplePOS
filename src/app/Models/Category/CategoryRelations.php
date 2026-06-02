<?php

namespace App\Models\Category;

use App\Models\SubCategory;
use App\Models\User;

trait CategoryRelations
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function subCategory() {
        return $this->hasMany(SubCategory::class);
    }
}
