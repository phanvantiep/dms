<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ar_payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('sales_number', 12);
			$table->string('invoice_number', 12);
			$table->string('invoice_type', 3);
			$table->integer('customer_id');
			$table->integer('salesman_id');
			$table->dateTime('invoice_date');
			$table->decimal('total_amount');
			$table->decimal('paid_amount');
			$table->decimal('discount_amount');
			$table->decimal('sales_return');
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
		Schema::drop('ar_payments');
	}

}
