<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Dashboard1'); // This should correspond to resources/views/dashboard.blade.php
    }
    
}
