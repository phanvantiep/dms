<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntranDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('intran_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('intran_number', 12);
			$table->integer('line_id');
			$table->integer('product_id');
			$table->integer('convert_unit');
			$table->float('whole_qty');
			$table->decimal('whole_price');
			$table->float('odd_qty');
			$table->decimal('odd_price');
			$table->float('line_qty');
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
		Schema::drop('intran_details');
	}

}
