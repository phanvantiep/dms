<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends BaseModel {

	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 0;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';
	
	protected $keycache = 'cache_customers_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
