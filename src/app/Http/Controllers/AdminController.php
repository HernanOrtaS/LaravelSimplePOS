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

    public function manageEnvironment() {
        return view('Admin.ManageEnvironment');
    }
}
