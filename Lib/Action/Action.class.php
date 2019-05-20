<?php
namespace Action;
use \Route\Route as Route;
class Action
{
	protected $_params;

	public function __construct(Route $route)
	{
		$this->$_params = $route->getParams();
		if(method_exists($this, '_verifcation'))
		{
			$this->_verifcation();
		}
	}
}