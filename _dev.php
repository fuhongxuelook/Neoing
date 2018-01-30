<?php
	$lists = array(
		array(
			array('href' => 'www.baidu.com', 'src' => '../pic/5915a69d6ef54.png', 'name' => '卷卷公主坐姿公仔', 'author' => '卷卷', 'price' => '39.00'), 
			array('href' => 'www.baidu.com', 'src' => '../pic/5915a6c3a8c78.png', 'name' => 'D型竹柄手拎小包', 'author' => '张果冻', 'price' => '123.00'), 
			array('href' => 'www.baidu.com', 'src' => '../pic/5915a6e5efd44.png', 'name' => '小胖看世界', 'author' => '钱总', 'price' => '139.00'), 
			array('href' => 'www.baidu.com', 'src' => '../pic/5915a6fd6ec32.png', 'name' => '孙悟空去哪了', 'author' => '诺一', 'price' => '299.00')
		)
	);
	foreach ($lists as $list) {
		foreach ($list as  $value) {
			dd($value['href']);
		}
	}