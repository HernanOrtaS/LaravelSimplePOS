<?php

namespace App\Models\PriceProductHistory;

use App\Models\Product;
use App\Models\User;

trait PriceProductHistoryRelations
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
