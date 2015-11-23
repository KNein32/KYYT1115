<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class login extends Controller
{
    /**
     * Login page
		*/
    public function index()
    {
        return view('login');
    }
}