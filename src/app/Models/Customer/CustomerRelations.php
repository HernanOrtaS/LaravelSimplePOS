<?php

namespace App\Models\Customer;

use App\Models\User;

trait CustomerRelations
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
