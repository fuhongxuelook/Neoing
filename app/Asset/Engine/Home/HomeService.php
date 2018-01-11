<?php

namespace Neo\Asset\Engine\Home;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class HomeService  {

	function __construct() {
	}


	public function buildProject(ProjectBean $been) {
		$file = $been->getFile();
		$path = $this->mvUploadFile($file);
		if(! $path ) {
			return false;
		}
    }
    private function mvUploadFile($file) {
    	$fileName = md5(time().rand(100,999)).'.'.$file->getClientOriginalExtension();
    	$path = 'project/'.$fileName;
    	Storage::put(
       		$path,
        	file_get_contents($file->getRealPath())
    	);
    	if(!Storage::exists($path)){
        	return false;
    	}
    	return $path;
	}
}