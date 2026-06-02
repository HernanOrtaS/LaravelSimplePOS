<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function sales()
    {
        return view('Cashier.CheckoutLayout');
    }

    public function checkout()
    {
        return view('Cashier.CheckoutLayout');
    }
}
