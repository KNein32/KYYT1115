<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * Responable for groups and their actions.
 */
class Group extends Model
{
		/**
		 * Gets the group the user belongs to
		 * @param User $user
		 * @return string
		 */
    public static function getUserGroup(User $user){
    	$group = Group::where('id', $user->groupId)
					->first();
			
			return $group->name;
    }
}
