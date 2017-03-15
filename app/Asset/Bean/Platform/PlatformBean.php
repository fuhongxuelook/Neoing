<?php
namespace Nor\Asset\Bean\Platform;

class PlatformBean {
	private $id;
	private $artist;
	private $space;

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setArtist($artist) {
		$this->artist = $artist;
	}

	public function getArtist() {
		return $this->artist;
	}

	public function setSpace($space) {
		$this->space = $space;
	}

	public function getSpace() {
		return $this->space;
	}
}

