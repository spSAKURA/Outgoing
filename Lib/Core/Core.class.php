<?php
namespace Core;
/**
 * 
 */
class Core
{
	/*
	| 初始化
	*/
	protected static function _init()
	{
		include_once RESOURCE_DIR . '/func.php';
		include_once CORE_DIR . '/Config.class.php';
		spl_autoload_register(include LIB_DIR . '/auto_load.php');
	}
	/*
	| 
	*/
	public static function run()
	{
		self::_init();
		# test code
		var_dump(C('EXTRA_CONF.0'));
		// $test = new \Core\AutoLoadTest();
	}
}