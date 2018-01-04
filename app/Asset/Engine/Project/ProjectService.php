<?php

namespace Neo\Asset\Engine\Project;

use Neo\Asset\Schema\Project\ProjectSchema as Schema;
use Neo\Asset\Bean\Project\ProjectBean;
use Neo\Asset\Config\ProjectConfig as Conf;

class ProjectService  {

	function __construct() {
	}

	public function buildProject(ProjectBean $been) {
		$file = $been->getFile();
		$this->mvUploadFile($file);

        
    }
    private function mvUploadFile($file) {
    	$newFileName = md5(time().rand(10,99)).'.'.$file->getClientOriginalExtension();
    	$savePath = 'project/'.$newFileName;
    	$bytes = Storage::put(
       		$savePath,
        	file_get_contents($file->getRealPath())
    	);
    	if(!Storage::exists($savePath)){
        	exit('保存文件失败！');
    	}
	}
}