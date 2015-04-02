<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends BaseModel {

	/**
	 * constants 
	 */
    const ROLE_ADMIN = 'admin'; 
	const ROLE_ACCOUNTING = 'accounting';
	const ROLE_BOSS = 'boss';
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'company_users';
	
	protected $keycache = 'cache_company_users_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
