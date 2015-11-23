<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\domain;
use Illuminate\Http\Request;

class user extends Controller
{
    /**
     * Regular user search page.
		*/
    public function index()
    {
      return view('user');
    }
		
		/**
		 * Search for user domains.
		 */
		public function search(Request $request)
		{
			$search = $request->input('domain');
			$searchArray = preg_split('/\\n/', $search);

			$domains = domain::whereIn('name', $searchArray)
				->get();

			return view('search', ['domains' => $domains]);
		}
}