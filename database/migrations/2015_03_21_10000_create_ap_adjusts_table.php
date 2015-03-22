<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApAdjustsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ap_adjusts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 500);
			$table->text('description');
			$table->text('short_description');
			$table->string('email');
			$table->string('phone', 255)->nullable();
			$table->string('fax', 20)->nullable();
			$table->string('tax_id', 50)->nullable();
			$table->string('website', 255)->nullable();
			$table->string('address1', 50)->nullable();
			$table->string('address2', 50)->nullable();
			$table->integer('ward_id')->nullable();
			$table->integer('district_id')->nullable();
			$table->string('state', 50)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('zipcode', 50)->nullable();
			$table->string('country_id', 3)->nullable();
			$table->smallInteger('status');
			$table->string('picture', 255)->nullable();
			$table->string('cover', 255)->nullable();
			$table->string('type', 20)->nullable();
			$table->timestamps();
			$table->integer('created_by');
			$table->integer('updated_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ap_adjusts');
	}

}
