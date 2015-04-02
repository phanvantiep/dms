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
			$table->string('first_name', 50);
			$table->string('last_name', 50)->nullable();
			$table->string('email')->unique();
			$table->string('user_type', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('address1', 50)->nullable();
			$table->string('address2', 50)->nullable();
			$table->integer('ward_id')->nullable();
			$table->integer('district_id')->nullable();
			$table->string('state', 50)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('password', 60);
			$table->string('zipcode', 50)->nullable();
			$table->string('country_id', 3)->nullable();
			$table->smallInteger('status');
			$table->string('picture', 255)->nullable();
			$table->string('cover', 255)->nullable();
			$table->string('signup_type', 20)->nullable();
			$table->string('signup_thirt_party', 50)->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->dateTime('last_login')->nullable();
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
