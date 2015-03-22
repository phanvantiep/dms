<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'companies';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'last_name', 'email', 'password', 'phone', 'address1', 'address2', 'ward_id', 'state', 'distric_id' ,'city', 'zipcode', 'country_id', 'status', 'facebook_id', 'signup_type', 'signup_thirt_party'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
