<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id');
			$table->char('name', 32);
			$table->char('username', 32);
			$table->string('email', 320)->unique();
			$table->string('password', 255);
			$table->string('country_id', 255);
			$table->string('city_id', 255);
			$table->string('gender', 255);
			$table->string('birthdate', 255);
			$table->string('avatar', 255);
			$table->string('fb_email', 255);
			$table->string('group_id', 255);
			$table->string('avatar', 255);
			$table->string('options', 255);
			$table->string('active', 255);
			$table->rememberToken();
			$table->timestamps();
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
