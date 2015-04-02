<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyOrder extends BaseModel {

	const STATUS_NEW = 'N';
	const STATUS_COMPLETE = 'C';
	
	const BUY_TYPE_BO = 'BO';
	const BUY_TYPE_BR = 'BR';
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'buy_orders';
	
	protected $keycache = 'cache_buy_orders_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
