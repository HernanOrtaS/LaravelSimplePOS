<?php

namespace App\Models\SubCategory;

use App\Classes\Models\ToLowerCaseAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait SubCategoryAttributes
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
