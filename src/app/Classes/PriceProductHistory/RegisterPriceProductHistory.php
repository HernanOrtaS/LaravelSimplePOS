<?php

namespace App\Classes\PriceProductHistory;

use App\Models\PriceProductHistory;
use App\Models\Product;

class RegisterPriceProductHistory
{
    /**
     * Create a new class instance.
     */
    public function saveRegister (array $data)
    {
        $check = $this->checkPrice($data['product_id'], $data['current_price']);

        if (!$check) {
            return PriceProductHistory::create([
                'price' => $data['current_price'],
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id'],
            ]);
        }

    }

    private function checkPrice($id, $newPrice)
    {
        $newPrice = floor($newPrice * 100) / 100;
        $product = PriceProductHistory::where('product_id', '=', $id)->latest()->first() ?? ['price' => 0];
        return $product['price'] == $newPrice;
    }
}
