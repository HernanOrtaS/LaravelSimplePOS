<?php

namespace App\Models\Product;

use App\Models\SubCategory;
use App\Models\User;

trait ProductRelations
{
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function sub_category () {
        return $this->belongsTo(SubCategory::class);
    }
}
