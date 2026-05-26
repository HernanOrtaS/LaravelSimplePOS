<?php

namespace App\Models\Customer;

use App\Classes\Models\ToLowerCaseAttribute;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait CustomerAttributes
{
    protected function firstName() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }

    protected function lastName() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }

    protected function email() : Attribute
    {
        return ToLowerCaseAttribute::lowerCase();
    }
}
