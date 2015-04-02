<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class INTran extends BaseModel {

	const STATUS_NEW = 'N';
	const STATUS_COMPLETE = 'C';
	
	const IN_TYPE_ISSUE = 'BO';
	const IN_TYPE_RECEIPT = 'RE';
	const IN_TYPE_TRANSFER = 'TF';
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'intrans';
	
	protected $keycache = 'cache_intrans_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
