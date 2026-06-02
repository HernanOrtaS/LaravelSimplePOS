<?php

namespace App\Models\PriceProductHistory;

use App\Classes\Models\ToLowerCaseAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait PriceProductHistoryAttributes
{
    protected function name() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }

    protected function description() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }
}
