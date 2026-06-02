<?php

namespace App\Classes\PriceProductHistory;

class PriceProductHistoryRules
{
    /**
     * Create a new class instance.
     */
    public static function rules()
    {
        return [
            'current_price' => 'required|decimal:2|min:1|max:100000',
            'user_id' => 'required|integer|min:1',
            'product_id' => 'required|integer|min:1',
        ];
    }
}
