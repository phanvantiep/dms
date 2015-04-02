<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provinces', function(Blueprint $table)
		{
			$table->string('province_id', 20);
			$table->string('name', 100);
			$table->string('country_code', 20);
			$table->integer('ordering');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provinces');
	}

}
