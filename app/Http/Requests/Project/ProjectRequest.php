<?php 
namespace Neo\Http\Requests\Project;

use Neo\Asset\Bean\Project\ProjectBean;
//use Request;
use Illuminate\Http\Request;

class ProjectRequest {
	private $bean;
	private $request;

	function __construct(ProjectBean $bean,Request $request) {
		$this->bean = $bean;
		$this->request = $request;
	}

	public function toParamsBean() {
		if(!$this->request->hasFile('file')) {
        	return false;
    	} 
    	$file = $this->request->file('file');
    	if(!$file->isValid()){
        	return false;
    	}
		$this->bean->setFile($file);
		$this->bean->setName($this->request->input('name'));
		$this->bean->setCategory($this->request->input('category'));
		$this->bean->setClass($this->request->input('class'));
		$this->bean->setPrice($this->request->input('price'));
		$this->bean->setStyle($this->request->input('style'));
		$this->bean->setLabel($this->request->input('label'));
		$this->bean->setContent($this->request->input('content'));
		dd($this->bean);
		return $this->bean;
	}
}