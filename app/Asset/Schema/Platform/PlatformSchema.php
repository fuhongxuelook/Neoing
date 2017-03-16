<?php

namespace Nor\Asset\Schema\Platform;

class PlatformSchema {

	protected table = 'product';

	public function scopeId($query,$id) {
		return $query->where('id','=',$id);
	} 

	public function scopeArtist($query,$artist) {
		return $query->where('artist','=',$artist);
	}

	public function scopeUid($query,$uid) {
		return $query->where('uid','=',$uid);
	}

	public function scopeDesc($query) {
		return $query->orderBy('created_at','desc');
	}



}