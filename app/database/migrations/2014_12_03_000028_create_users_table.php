<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->string('user_id', 30)->default('')->primary();
			$table->string('user_first_name', 30)->default('');
			$table->string('user_last_name', 30)->nullable()->default('');
			$table->date('dob')->nullable();
			$table->string('email_id', 50)->default('');
			$table->string('user_city', 40)->nullable();
			$table->integer('reputation')->nullable();
			$table->dateTime('last_accessed_date')->nullable();
			$table->date('registration_date')->nullable();
			$table->string('password', 40)->default('');
			$table->string('status', 20)->nullable();
			$table->string('isLoggedin', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
