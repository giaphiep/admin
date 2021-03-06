<?php

use Illuminate\Database\Seeder;
use GiapHiep\Admin\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();

		User::create([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('111111'),
        	'is_admin' => 1
        ]);

    }
}
