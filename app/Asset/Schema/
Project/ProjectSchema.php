<?php

namespace Neo\Asset\Schema\Project;

class ProjectSchema {

	protected $table = 'project';

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

	public function scopeCircle($query,$circle) {
		return $query->where('circle_id','=',$circle);
	}


}