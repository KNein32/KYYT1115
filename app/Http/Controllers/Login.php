<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Illuminate\Http\Request;

/**
 * Handles loggin pages.
 */
class login extends Controller
{
    /**
     * Login page
		*/
    public function index()
    {
        return view('login');
    }
		
		/**
		 * Log in check.
		 * Password should be encrypted and validation should be done in the model.
		 * Should use select to get the columns you are interested in.
		 * 
		 * @param Request
		 */
		public function user(Request $request)
		{
			$name = $request->input('name');
			$password = $request->input('password');
			
			$user = User::validate($name, $password);
			
			if(!$user) {
				return redirect('/')
						->withErrors('Failed to validate user name or password');
			}
			
			$group = Group::getUserGroup($user);
			
			return redirect($group);
		}
}