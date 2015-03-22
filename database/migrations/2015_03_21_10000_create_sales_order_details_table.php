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
			$table->float('line_discount_percent');
			$table->decimal('line_discount_amount');
			$table->integer('promotion_id');
			
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
