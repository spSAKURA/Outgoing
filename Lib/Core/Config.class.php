<?php
namespace Core;

class Config
{
	/*
	| $配置
	*/
	protected $_config;

	/*
	| _cons
	*/
	public function __construct()
	{
		$this->_config = include RESOURCE_DIR . '/default.conf.php';
		if (file_exists(RESOURCE_DIR . '/user.conf.php')) {
			$user_conf = include(RESOURCE_DIR . '/user.conf.php');
			foreach ($user_conf as $key => $value) {
				$this->_updateConf($this->_config[$key],$key,$value);
			}
		}
	}
	/*
	| updateConf
	*/
	protected function _updateConf(&$config,$key,$val)
	{
		if(!$config)
		{
			$config = $val;
		}
		elseif(gettype($val) != 'array' && $config != $val)
		{
			$config = $val;
		}
		elseif(gettype($val) === 'array')
		{
			if(gettype($config) != 'array')
			{
				$config == [];
			}
			foreach($val as $k => $v)
			{
				$config[$k] = false;
				$this->_updateConf($config[$k],$k,$v);
			}
		}
	}
	/*
	|
	*/
	public function readConf($keys_str)
	{
		$reval = $this->_config;
		if($keys_str)
		{
			$keys = explode('.', $keys_str);
			foreach ($keys as $k) 
			{
				if(isset($reval[$k]))
					$reval = $reval[$k];
				else
					return null;
			}
		}
		return $reval;
	}
}