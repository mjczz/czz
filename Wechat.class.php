<?php
namespace czz;

use EasyWeChat\Factory;
use EasyWeChat\Kernel\Messages\Image;
use EasyWeChat\Kernel\Messages\News;
use EasyWeChat\Kernel\Messages\NewsItem;

class WechaClass
{
	protected $app;

	public function __construct()
	{
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

		$this->app = Factory::officialAccount($config);
	}

	// 获取用户列表
	public function userList(){
		return $this->app->user->list();
	}

	// 获取用户信息
	public function userInfo($openid){
		return $this->app->user->get($openid);
	}

	// 获取当前菜单
	public function currentMenu(){
		return $this->app->menu->current();
	}

	// 创建菜单
	public function createMenu($buttons,$matchRule = []){
		return $this->app->menu->create($buttons,$matchRule);
	}



}





