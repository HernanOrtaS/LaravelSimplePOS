<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Guest.Login.Login');
})->name('login');

Route::get('/register', function () {
    return view('Guest.Register.Register');
})->name('register');

Route::middleware('auth')->group(function (){
    Route::middleware('AdminMiddleware')->prefix('admin')->name('admin.')
    ->group(function (){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/manageCategory', [AdminController::class, 'manageCategory'])->name('manageCategory');
    });

    Route::middleware('UserMiddleware')->prefix('user')->name('user.')
    ->group(function (){
        Route::get('/home', function(){ return 'You are an User'; });
    });
});

Route::middleware('guest')->group(function (){

});
