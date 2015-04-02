<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_discounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 20);
			$table->string('name', 500);
			$table->string('type', 10);
			$table->text('description')->nullable();
			$table->dateTime('from_date');
			$table->dateTime('to_date');
			$table->dateTime('buy_product_id');
			$table->float('buy_whole_qty');
			$table->float('buy_odd_qty');
			$table->dateTime('get_product_id')->nullable();
			$table->float('get_whole_qty')->nullable();
			$table->float('get_odd_qty')->nullable();
			$table->decimal('get_amount')->nullable();
			$table->float('get_percent')->nullable();
			$table->smallInteger('status');
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
		Schema::drop('sales_discounts');
	}

}
