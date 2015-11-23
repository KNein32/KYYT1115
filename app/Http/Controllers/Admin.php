<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\domain;
use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Regular user search page.
		*/
    public function index()
    {
      return view('admin/index');
    }
		
		/**
		 * Search for user domains.
		 */
		public function add(Request $request)
		{

		}
}