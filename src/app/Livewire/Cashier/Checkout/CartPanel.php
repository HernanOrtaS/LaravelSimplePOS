<?php

namespace App\Livewire\Cashier\Checkout;

use Livewire\Component;

class CartPanel extends Component
{
    public float $total = 0;
    public $products = [];

    public function mount()
    {

    }

    public function getTotal()
    {

    }

    public function render()
    {
        return view('livewire.cashier.checkout.cart-panel');
    }
}
