<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ARPayment extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ar_payments';
	
	protected $keycache = 'cache_ar_payments_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
