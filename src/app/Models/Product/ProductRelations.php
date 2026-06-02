<?php

namespace App\Models\Product;

use App\Models\PriceProductHistory;
use App\Models\SubCategory;
use App\Models\User;

trait ProductRelations
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }

    public function priceProductHistory(){
        return $this->hasMany(PriceProductHistory::class);
    }
}
