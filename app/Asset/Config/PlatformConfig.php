<?php 
namespace Nor\Asset\Config;


class PlatformConfig {
	const SUCCESS = 200 ;
	const ERROR	  = 201 ;
	const NAME_REPEAT     = 202;

	const MAX_NAME_LENGTH = 50 ;
	const MAX_DESC_LENGTH = 500 ;


	public static $errorInfo = array(
		self::SUCCESS => '成功',
		self::ERROR   => '失败',
		self::MAX_NAME_LENGTH => '名称超过最大长度',
		self::MAX_DESC_LENGTH => '描述超过最大长度',
		self::NAME_REPEAT  => '名称重复',
	);
}