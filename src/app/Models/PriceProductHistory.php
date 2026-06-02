<?php

namespace App\Models;

use App\Models\PriceProductHistory\PriceProductHistoryAttributes;
use App\Models\PriceProductHistory\PriceProductHistoryRelations;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['price', 'user_id', 'product_id'])]

class PriceProductHistory extends Model
{
    use PriceProductHistoryAttributes;
    use PriceProductHistoryRelations;
}
