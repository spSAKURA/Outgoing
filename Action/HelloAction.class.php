<?php
namespace App\Action;
use \Action\Action as Action;
class HelloAction extends Action
{
	public function helloWorld()
	{
		print('helloWorld');
	}
}