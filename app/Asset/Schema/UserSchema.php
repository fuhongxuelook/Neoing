<?php
namespace Neo\Asset\Schema;


use DB;

class UserSchema extends Model {

	use SoftDeletes;
	protected $table = 'users';

	public function scopeAccount ($query,$account) {
		return $query->where('account', '=' , $account);
	}

	public function scopePw($query,$pw) {
		return $query->where('password' ,'=' ,$pw);
	}

	public function scopeId ($query,$id) {
		$id = (int)$id;
		return $query->where('id' ,'=', $id)
	}


}