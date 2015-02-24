<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration {

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
			$table->char('name', 50);
			$table->char('username', 50);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->integer('country_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->boolean('gender')->nullable();
			$table->date('birthdate')->nullable();
			$table->string('avatar', 255);
			$table->string('fb_email', 255);
			$table->integer('group_id')->unsigned();
			$table->text('options');
			$table->boolean('active')->default(0);
			$table->unique('email');
			$table->rememberToken();
			//Adds created_at and updated_at columns
			$table->timestamps();
		});
		//Schema::table('users', function($table) {
			//$table->foreign('country_id')->references('id')->on('countries');
			//$table->foreign('city_id')->references('id')->on('cities');
			//$table->foreign('group_id')->references('id')->on('groups');
		//});
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
