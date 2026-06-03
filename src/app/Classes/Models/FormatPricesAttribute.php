<?php

namespace App\Classes\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

class FormatPricesAttribute
{
    public static function decimal(): Attribute
    {
        return new Attribute(
            get: fn ($value) => floor($value * 100) / 100,
            set: fn ($value) => floor($value * 100) / 100,
        );
    }
}
