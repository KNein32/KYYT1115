<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Illuminate\Http\Request;

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
		 */
		public function user(Request $request)
		{
			$name = $request->input('name');
			$password = $request->input('password');
			
			$user = User::where('name', $name)
					->where('password', $password)
					->first();
			
			if(empty($user)) {
				return redirect('/')
						->withErrors('Failed to validate user name or password');
			}
			
			$group = Group::where('id', $user->groupId)
					->first();
			
			if(empty($group)) {
				return redirect('/')
					->withErrors('Failed to find group for user');
			}
			
			return redirect($group->name);
		}
}