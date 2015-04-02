<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends BaseModel {

	/**
	 * constants 
	 */
    const STATUS_ACTIVE = 1; 
	const STATUS_INACTIVE = 0;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'companies';
	
	protected $keycache = 'cache_companies_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
