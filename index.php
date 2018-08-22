<?php
require "./vendor/autoload.php";
use EasyWeChat\Factory;
//require "./Wechat.class.php";
//use czz\WechaClass;
$config = [
	'app_id' => 'wxac37399f30e17bb5',
	'secret' => 'febffa2dd3146e79740e21b8265ae197',

	// 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
	'response_type' => 'array',

	'log' => [
		'level' => 'debug',
		'file' => __DIR__.'/wechat.log',
	],
];

$app = Factory::officialAccount($config);

//var_dump($app);


