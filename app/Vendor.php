<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vendors';
	
	protected $keycache = 'cache_vendors_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'code', 'slug', 'name', 'description', 'short_description', 'email', 'phone', 'fax', 'tax_id', 'website', 'address1', 'address2',
			'ward_id', 'district_id', 'state', 'city', 'zipcode', 'country_id', 'status', 'picture', 'cover', 'type'
	];


}
