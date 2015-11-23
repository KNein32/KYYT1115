<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/**
	 * Validates a userName and Password
	 * Return false if failed otherwise the user.
	 * 
	 * @param $userName
	 * @param $password
	 * 
	 * @return App/User|boolean
	 */
	public static function validate($name, $password){
		$user = static::where('name', $name)
			->where('password', $password)
			->first();
			
		if(empty($user)){
			return false;
		}
		
		return $user;
	}
}
