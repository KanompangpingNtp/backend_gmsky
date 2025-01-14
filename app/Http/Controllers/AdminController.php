<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function WelcomeAdmin ()
    {
        return view('admin.welcome');
    }
}
