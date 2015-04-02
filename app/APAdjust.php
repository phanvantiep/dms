<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class APAdjust extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ap_adjusts';
	
	protected $keycache = 'cache_ap_adjusts_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
