<?php

namespace App\Classes\PriceProductHistory;

use App\Models\PriceProductHistory;

class GetPriceProductHistory
{
    /**
     * Create a new class instance.
     */
    public function getFullProductHistory()
    {
        $product = PriceProductHistory::all();
        return $product;
    }
}
