<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoNumber extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auto_numbers';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];


}
