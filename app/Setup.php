<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'setups';

	protected $keycache = 'cache_setups_';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
