<?php

namespace App\Models\User;

use App\Models\Category;

trait UserRelations
{
    public function Category (){
        return $this->hasMany(Category::class);
    }
}
