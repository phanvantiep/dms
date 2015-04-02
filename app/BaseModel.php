<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Cache;

class BaseModel extends Model {
	
	protected $keycache = null;
	protected $expire = 60 * 24 * 365;
	
	public function _getById($id) {
		$object = Cache::get($this->keycache . $id);
		if (empty($object)) {
			$object = self::find($id);
			Cache::add($this->keycache . $id, $object, $this->expire);
		}

		return $object;
	}
	
	public function _save() {
		if(empty($this)) {
			return false;
		}
		
		self::save();
		Cache::add($this->keycache . $this->id, $this, $this->expire);
		return true;
	}
	
	public function _delete($id) {
		self::destroy($id);
		Cache::forget($this->keycache . $this->id);
		return true;
	}
	
	public function _getByListId($ids) {
		$objects = null;
		
		if (empty($ids)) {
			return $objects;
		}
		
		foreach ($ids as $id) {
			$objects[] = $this->_getById($id);
		}
		
		return $objects;
	}
}
