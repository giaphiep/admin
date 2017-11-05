<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	if (Schema::hasTable('users')) {

    		Schema::table('users', function (Blueprint $table) {
	            
	            if (!Schema::hasColumn('users', 'is_admin')) {

	            	$table->tinyInteger('is_admin')->default(0)->comment('1: admin, 0: not is admin');
	            }

	            if (!Schema::hasColumn('users', 'name')) {
	            	$table->string('name');
	            }
	            
	            if (!Schema::hasColumn('users', 'email')) {
	            	$table->string('email')->unique();
	            }

	            if (!Schema::hasColumn('users', 'password')) {
	            	$table->string('password');
	            }

	            if (!Schema::hasColumn('users', 'remember_token')) {
	            	$table->rememberToken();
	            }


	        });
    	}

    	else {

    		Schema::create('users', function (Blueprint $table) {
	            $table->increments('id');
	            $table->string('name');
	            $table->string('email')->unique();
	            $table->string('password');
	            $table->tinyInteger('is_admin')->default(0)->comment('1: admin, 0: not is admin');
	            $table->rememberToken();
	            $table->timestamps();
	        });
    	}
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
