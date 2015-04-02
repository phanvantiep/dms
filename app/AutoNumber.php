<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoNumber extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auto_numbers';
	
	protected $keycache = 'cache_auto_numbers_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
