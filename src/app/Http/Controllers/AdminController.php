<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('Admin.Dashboard');
    }

    public function manageCategory() {
        return view('Admin.ManageCategory');
    }

    public function manageSubCategory() {
        return view('Admin.ManageSubCategory');
    }

    public function manageProduct() {
        return view('Admin.ManageProduct');
    }

    public function manageCustomer() {
        return view('Admin.ManageCustomer');
    }

    public function manageEnvironment() {
        return view('Admin.ManageEnvironment');
    }
}
