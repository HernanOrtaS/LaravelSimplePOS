<?php

namespace App\Models;
use App\Models\Product\ProductAttributes;
use App\Models\Product\ProductRelations;
use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'description', 'current_price', 'user_id', 'sub_category_id',])]
class Product extends Model
{
    use ProductAttributes;
    use ProductRelations;
}
