<?php
namespace Neo\Asset\Bean\Project;

class ProjectBean {

	private $file;
	private $name;
	private $price;
	private $style;
	private $label;
	private $content;

	public function setFile($file) {
		$this->file = $file;
	}

	public function getFile() {
		return $this->file;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setStyle($style) {
		$this->style = $style;
	}

	public function getStyle() {
		return $this->style;
	}
	public function setLabel($label) {
		$this->label = $label;
	}

	public function getLabel() {
		return $this->label;
	}
	public function setContent($content) {
		$this->content = $content;
	}

	public function getContent() {
		return $this->content;
	}
}

