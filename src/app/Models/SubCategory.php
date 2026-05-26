<?php

namespace App\Models;
use App\Models\SubCategory\SubCategoryAttributes;
use App\Models\SubCategory\SubCategoryRelations;
use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'description', 'user_id', 'category_id',])]
class SubCategory extends Model
{
    use SubCategoryAttributes;
    use SubCategoryRelations;
}
