<?php
namespace Route;
class Route
{
	protected  $_url;
	protected  $_rule;
	protected  $_params;
	public function __construct(){
		$this->_url = substr($_SERVER['REQUEST_URI'],strlen(WEB_DIR));
	}
	public function check()
	{
		if($this->_rule){
			foreach($this->_rule as $rule){
				$method = $rule['method'];
				$res = $this->$method($this->_url);
				if($res === false)
					return;
				switch ($rule['type']) {
					case 'Action':
						$action = new $rule['name']($this);
						// var_dump($action);
						$action -> $res();
						break;

					default:
						exit('error');
						break;
				
				}
			}
		}
	}
	/*
	|
	*/
	public function getParams()
	{
		return $this->_params;
	}
}