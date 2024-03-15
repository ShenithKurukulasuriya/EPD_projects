<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{

    protected $redirectTo = '/dashboard1';
    public function showLoginForm()
{
    return view('custom-login');
}



}
