<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyOrderDetail extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'buy_order_details';
	
	protected $keycache = 'cache_buy_order_details_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
