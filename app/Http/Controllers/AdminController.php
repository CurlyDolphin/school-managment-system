<?php

namespace App\Http\Controllers;

use Auth;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
