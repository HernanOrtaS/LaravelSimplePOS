<?php

namespace App\Models;
use App\Models\Customer\CustomerAttributes;
use App\Models\Customer\CustomerRelations;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Model;
#[Fillable(['first_name', 'last_name', 'email', 'phone_number', 'user_id',])]
class Customer extends Model
{
    use CustomerAttributes;
    use CustomerRelations;

}
