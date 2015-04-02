<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Cache;

class Province extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'provinces';
	protected $keycacheAll = 'cache_provinces_all';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];
	
	public function _getAll() {
		$objects = Cache::get($this->keycacheAll);
		if (empty($object)) {
			$objects = self::all();
			Cache::add($this->keycacheAll, $objects, $this->expire);
		}

		return $objects;
	}

}
