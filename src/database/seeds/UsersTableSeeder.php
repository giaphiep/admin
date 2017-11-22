<?php

use Illuminate\Database\Seeder;
use GiapHiep\Admin\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (!User::where('email','admin@admin.com')->count()) {
    		User::create([
	        	'name' => 'Admin',
	        	'email' => 'admin@admin.com',
	        	'password' => bcrypt('111111'),
	        	'is_admin' => 1
	        ]);
    	}
        
    }
}
