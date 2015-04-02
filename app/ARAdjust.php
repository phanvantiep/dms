<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ARAdjust extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ar_adjusts';
	
	protected $keycache = 'cache_ar_adjusts_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
