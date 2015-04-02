<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sales_orders';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
