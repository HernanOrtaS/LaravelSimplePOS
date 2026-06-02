<?php

namespace App\Models\User;

use App\Models\Category;
use App\Models\Customer;
use App\Models\PriceProductHistory;
use App\Models\Product;
use App\Models\SubCategory;

trait UserRelations
{
    public function category(){
        return $this->hasMany(Category::class);
    }

    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function customer(){
        return $this->hasMany(Customer::class);
    }

    public function priceProductHistory(){
        return $this->hasMany(PriceProductHistory::class);
    }
}
