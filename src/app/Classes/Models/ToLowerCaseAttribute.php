<?php

namespace App\Classes\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

class ToLowerCaseAttribute
{
    public static function lowerCase(): Attribute
    {
        return new Attribute(
            get: fn ($value) => mb_strtolower($value),
            set: fn ($value) => mb_strtolower($value),
        );
    }
}
