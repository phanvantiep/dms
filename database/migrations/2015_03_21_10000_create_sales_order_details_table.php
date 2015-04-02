<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_order_details', function(Blueprint $table)
		{
			$table->integer('sales_order_id');
			$table->integer('line_id');
			$table->integer('product_id');
			$table->integer('convert_unit');
			$table->float('whole_qty');
			$table->decimal('whole_price');
			$table->float('odd_qty');
			$table->decimal('odd_price');
			$table->float('line_qty');
			$table->decimal('line_amount');
			$table->float('line_discount_percent')->nullable();
			$table->decimal('line_discount_amount')->nullable();
			$table->decimal('final_line_amount');
			$table->integer('promotion_id')->nullable();
			$table->smallInteger('promotion_type')->nullable();
			$table->integer('get_product_id')->nullable();
			$table->integer('get_whole_qty')->nullable();
			$table->integer('get_odd_qty')->nullable();
			$table->decimal('get_amount')->nullable();
			$table->float('get_percent')->nullable();
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
		Schema::drop('sales_order_details');
	}

}
