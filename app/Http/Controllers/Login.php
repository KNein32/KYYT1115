<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Group;

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