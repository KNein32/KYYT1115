<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$id = DB::table('groups')->insertGetId([
        'name' => 'admin',
        'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
      ]);
			
			DB::table('users')->insert([
        'name' => 'admin',
        'password' => '1234',
        'groupId' => $id,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);
			
			$id = DB::table('groups')->insertGetId([
        'name' => 'user',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);
			
			DB::table('users')->insert([
        'name' => 'user',
        'password' => 'asdf',
        'groupId' => $id,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
      ]);
    }
}
