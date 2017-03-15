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


}