<?php

namespace App\Models\Product;

use App\Classes\Models\ToLowerCaseAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait ProductAttributes
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
