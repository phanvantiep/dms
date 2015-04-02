<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Cache;

class Ward extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'wards';
	protected $keycacheDistrict = 'cache_ward_district_id_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];
	
	public function _getByDistrict($districtId) {
		$objects = Cache::get($this->keycacheDistrict . $districtId);
		if (empty($object)) {
			$objects = self::where('district_id' , '=' , $districtId)->get();
			Cache::add($this->keycacheDistrict . $districtId, $objects, $this->expire);
		}

		return $objects;
	}
}
