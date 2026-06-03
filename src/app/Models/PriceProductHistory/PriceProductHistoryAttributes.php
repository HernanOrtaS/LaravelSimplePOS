<?php

namespace App\Models\PriceProductHistory;

use App\Classes\Models\FormatPricesAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait PriceProductHistoryAttributes
{
    protected function price() : Attribute
    {
        return FormatPricesAttribute::decimal();
    }
}
