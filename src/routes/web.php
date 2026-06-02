<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Cashier\CashierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if(auth()->check()) {

        if(auth()->user()->userType === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('cashier.cashierSales');
    }

    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('Guest.Login.Login');
    })->name('login');

    Route::get('/register', function () {
        return view('Guest.Register.Register');
    })->name('register');
});

Route::middleware('auth')->group(function () {

    Route::middleware('AdminMiddleware')
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {

            Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
            Route::get('/manageCategory', [AdminController::class, 'manageCategory'])->name('manageCategory');
            Route::get('/manageSubCategory', [AdminController::class, 'manageSubCategory'])->name('manageSubCategory');
            Route::get('/manageProduct', [AdminController::class, 'manageProduct'])->name('manageProduct');
            Route::get('/manageCustomer', [AdminController::class, 'manageCustomer'])->name('manageCustomer');
        });

    Route::middleware('CashierMiddleware')
        ->prefix('cashier')
        ->name('cashier.')
        ->group(function () {

            Route::get('/', [CashierController::class, 'sales'])->name('cashierSales');
            Route::get('/checkout', [CashierController::class, 'checkout'])->name('cashierCheckout');
        });
});