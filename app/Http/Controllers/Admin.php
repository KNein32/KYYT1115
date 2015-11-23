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
			$name = $request->input('name');
			$rank = $request->input('rank');

			$domain = new domain();
			$domain->name = $name;
			$domain->rank = $rank;
			
			try {
				$domain->save();
				$result = "success";
			}
			catch(\Exception $e){
				$result = $e->getMessage();
			}

			return view('admin/add', ['result' => $result]);
		}
}