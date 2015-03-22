<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->integer('site_id');
			$table->string('code', 50);
			$table->string('name', 500);
			$table->string('picture', 255);
			$table->decimalinteger('category_id');
			$table->decimal('whole_sales_price');
			$table->decimal('odd_sales_price');
			$table->decimal('whole_sales_cash_price');
			$table->decimal('odd_sales_cash_price');
			$table->decimal('whole_buy_price');
			$table->decimal('odd_buy_price');
			$table->float('whole_qty');
			$table->float('odd_qty');
			$table->integer('whole_unit_id');
			$table->integer('odd_unit_id');
			$table->integer('convert_unit');
			$table->smallInteger('status');
			$table->float('width_unit');
			$table->float('width');
			$table->string('volume_unit');
			$table->float('weight');
			$table->float('height');
			$table->float('length');
			$table->integer('order');
			$table->string('bar_code');
			$table->float('salary_rate');
			$table->decimal('amount_rate');
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
		Schema::drop('products');
	}

}
