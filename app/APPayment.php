<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class APPayment extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ap_payments';
	
	protected $keycache = 'cache_ap_payments_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
