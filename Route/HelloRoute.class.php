<?php
namespace App\Route;
use Route\Route as Route;
class HelloRoute extends Route
{

	protected  $_rule = [
		[
			'method' => '_helloRule',
			'type'   => 'Action',
			'name'   => '\App\Action\HelloAction',
		],
	];
	protected function _helloRule($url)
	{
		return 'helloWorld';
	}
}