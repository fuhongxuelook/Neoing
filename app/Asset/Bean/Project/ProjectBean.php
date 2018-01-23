<?php
namespace Neo\Asset\Bean\Project;

class ProjectBean {

	private $_file;
	private $_name;
	private $_category;
	private $_class;
	private $_price;
	private $_style;
	private $_label;
	private $_content;

	public function setFile($file) {
		$this->_file = $file;
	}

	public function getFile() {
		return $this->_file;
	}

	public function setName($name) {
		$this->_name = $name;
	}

	public function getName() {
		return $this->_name;
	}
	public function setPrice($price) {
		$this->_price = $price;
	}

	public function getPrice() {
		return $this->_price;
	}
	public function setStyle($style) {
		$this->_style = $style;
	}

	public function getStyle() {
		return $this->_style;
	}
	public function setLabel($label) {
		$this->_label = $label;
	}

	public function getLabel() {
		return $this->_label;
	}
	public function setContent($content) {
		$this->_content = $content;
	}

	public function getContent() {
		return $this->_content;
	}

	public function setCategory($category) {
		$this->_category = $category;
	}

	public function getCategory() {
		return $this->_category;
	}

	public function setClass($class) {
		$this->_class = $class;
	}

	public function getClass() {
		return $this->_class;
	}
}

