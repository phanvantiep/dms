<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Cache;

class District extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'districts';
	protected $keycacheProvince = 'cache_district_province_id_';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];
	
	public function _getByProvince($provinceId) {
		$objects = Cache::get($this->keycacheProvince . $provinceId);
		if (empty($object)) {
			$objects = self::where('province_id' , '=' , $provinceId)->get();
			Cache::add($this->keycacheProvince . $provinceId, $objects, $this->expire);
		}

		return $objects;
	}

}
