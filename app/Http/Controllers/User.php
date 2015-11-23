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
      return view('user/index');
    }
		
		/**
		 * Search for user domains.
		 */
		public function search(Request $request)
		{
			$search = $request->input('domain');
			$searchArray = preg_split('/\\r\\n/', $search);

			$domains = domain::whereIn('name', $searchArray)
				->get();

			return view('user/search', ['domains' => $domains]);
		}
}