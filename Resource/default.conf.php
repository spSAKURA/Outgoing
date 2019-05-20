<?php
//配置文件
return [
	'LIB_CLASS' => [
		'Core',
		'Route',
		'Model',
		'Action',
		'Cache',
		'View',
	],
	//注册路由规则
	'ROUTING_RULE'=>[
		'route'=>'\Route\Route',
		'hello'=>'App\Route\HelloRoute',
	]
];