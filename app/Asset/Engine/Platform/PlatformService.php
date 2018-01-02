<?php

namespace Neo\Asset\Engine\Platform;

use Neo\Asset\Schema\Platform\PlatformSchema as Schema;
use Neo\Asset\Bean\Platform\PlatformBean;
use Neo\Asset\Config\PlatformConfig as Conf;

class PlatformService {

	private $uid ;

	function __construct() {
	}

	public function listProducts(PlatformBean $params) {
		$circle = $params->getCircle();
		if(isset($circle)) {
			$products = Schema::circle($circle)->desc()->paginate(15);
		} else {
			$products = Schema::desc()->paginate(15);
		}

		return json_encode($products);
	}

	public function getProductById(PlatformBean $params) {
		$id = $params->getId();
		$product = Schema::id($id)->first();
		return json_encode($product);
	}

	public function getUserProducts($uid) {
		$products = Schema::uid($uid)->desc()->paginate(15);
		return json_encode($products);
	}


    public function addProducts(PlatformBean $params) {
    	   // 文件校验可封装
        $file       = $params->getFile();
        $data         = array();
        $data['name'] = $params->getName();
        // 检测上传名称长度
        if (mb_strlen($data['name'],'UTF-8') > Conf::MAX_NAME_LENGTH) {
            return json_encode(result(Conf::NAME_LENGTH_ERROR, Conf::$errorInfo[Conf::NAME_LENGTH_ERROR], ''));
        }

        // 检测同一用户上传名称重复
        if (! empty(Schema::name($data['name'])->first())) {
            return json_encode(result(Conf::NAME_REPEAT, Conf::$errorInfo[Conf::NAME_REPEAT], ''));
        }

        // 上传描述太长
        $data['desc'] = $params->getDesc();
        if (mb_strlen($data['desc'],'UTF-8') > Conf::MAX_DESC_LENGTH) {
            return json_encode(result(Conf::DESC_LENGTH_ERROR,Conf::$errorInfo[Conf::DESC_LENGTH_ERROR], ''));
        }
        $data['original_name'] = $file->getClientOriginalName();
        $extension             = $file->getClientOriginalExtension();
        $data['store_name']    = uniqid().'.'.$extension;

        // 存储上传文件
        $status = $file->move($this->path['pic'], $data['store_name']);
        $insertDBId  = Schema::insertGetId($data);

        return json_encode(result(Conf::SUCCESS, Conf::$errorInfo[Conf::SUCCESS], array('id' => $insertDBId, 'name' => $data['name'])));
    }

}