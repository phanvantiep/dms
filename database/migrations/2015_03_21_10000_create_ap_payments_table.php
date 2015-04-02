<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ap_payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->integer('vendor_id');
			$table->string('buy_number', 12);
			$table->string('invoice_number', 12);
			$table->string('invoice_type', 3);
			$table->dateTime('invoice_date');
			$table->decimal('total_amount');
			$table->decimal('paid_amount');
			$table->decimal('discount_amount');
			$table->decimal('balance');
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
		Schema::drop('ap_payments');
	}

}
