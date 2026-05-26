<?php

namespace App\Models\Category;

use App\Classes\Models\ToLowerCaseAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait CategoryAttributes
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
