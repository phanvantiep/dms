<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'units';
	
	protected $keycache = 'cache_units_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
