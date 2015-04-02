<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends BaseModel {

	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 0;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'salesmans';
	
	protected $keycache = 'cache_salesmans_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
