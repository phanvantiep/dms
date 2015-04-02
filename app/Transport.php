<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'transports';
	
	protected $keycache = 'cache_transports_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
