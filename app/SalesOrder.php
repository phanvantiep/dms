<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesOrder extends BaseModel {

	const STATUS_NEW = 'N';
	const STATUS_COMPLETE = 'C';
	
	const ORDER_TYPE_SO = 'SO';
	const ORDER_TYPE_RO = 'RO';
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sales_orders';
	
	protected $keycache = 'cache_sales_orders_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
