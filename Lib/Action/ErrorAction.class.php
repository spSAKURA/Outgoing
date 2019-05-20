<?php
namespace Action;
use Action;
class ErrorAction Extends Action
{
	public function __construct($route_params)
	{
		parent::__construct($route);
	}
	protected function _response()
	{
		return new \View\ErrorView();
	}
}