<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesmansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salesmans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('code', 20);
			$table->integer('user_id');
			$table->integer('transport_id');
			$table->smallInteger('status');
			$table->float('salary_rate');
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
		Schema::drop('salesmans');
	}

}
