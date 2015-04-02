<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->string('code', 20);
			$table->string('name', 500);
			$table->string('email');
			$table->string('phone', 255)->nullable();
			$table->string('address1', 50)->nullable();
			$table->string('address2', 50)->nullable();
			$table->integer('ward_id')->nullable();
			$table->integer('district_id')->nullable();
			$table->string('state', 50)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('zipcode', 50)->nullable();
			$table->string('country_id', 3)->nullable();
			$table->string('type', 20)->nullable();
			$table->decimal('debit_limited')->nullable();
			$table->decimal('payment_term')->nullable();
			$table->smallInteger('pay_cash')->nullable();
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
		Schema::drop('customers');
	}

}
