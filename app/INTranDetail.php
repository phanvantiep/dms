<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class INTranDetail extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'intran_details';
	
	protected $keycache = 'cache_intran_details_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
