<?php

namespace App\Models;
use App\Models\Category\CategoryAttributes;
use App\Models\Category\CategoryRelations;
use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'description', 'user_id',])]
class Category extends Model
{
    use CategoryAttributes;
    use CategoryRelations;
    
}
