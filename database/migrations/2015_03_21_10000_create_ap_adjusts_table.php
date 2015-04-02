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
			$table->integer('company_id');
			$table->string('buy_number', 12);
			$table->string('invoice_number', 12);
			$table->string('invoice_type', 3);
			$table->smallInteger('payment_time');
			$table->dateTime('tran_date');
			$table->decimal('amount');
			$table->string('ar_type', 3);
			$table->text('description')->nullable();
			$table->text('reason')->nullable();
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
