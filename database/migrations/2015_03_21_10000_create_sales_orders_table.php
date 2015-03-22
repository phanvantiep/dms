<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('sales_number', 12);
			$table->string('invoice_number', 12);
			$table->string('invoice_type', 3);
			$table->integer('customer_id');
			$table->integer('salesman_id');
			$table->float('total_qty');
			$table->decimal('total_amount');
			$table->float('tax_percent');
			$table->decimal('tax_amount');
			$table->decimal('percent_amount');
			$table->decimal('discount_amount');
			$table->decimal('final_amount');
			$table->dateTime('order_date');
			$table->dateTime('invoice_date');
			$table->string('status');
			$table->integer('site_id');
			$table->integer('return_sales_order_id');
			$table->string('payment_type');
			$table->decimal('payment_ammount');
			$table->integer('promotion_id');
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
		Schema::drop('sales_orders');
	}

}
