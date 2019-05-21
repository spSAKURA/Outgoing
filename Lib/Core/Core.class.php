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
        // set_error_handler('\Core\Core::appError');
        // set_exception_handler('\Core\Core::error_handler');
        
	}
	/*
	| 
	*/
    static public function appError($errno, $errstr, $errfile, $errline) {
        var_dump($errno, $errstr, $errfile, $errline);
        return true;
    }
    /*
     * 错误处理
     */
    static public function error_handler($ex)
    {
        var_dump($ex);
    }

	public static function run()
	{
		self::_init();
		$routing = C('ROUTING_RULE');
        foreach ($routing as $rule) {
        	$rule = new $rule();
        	$rule->check();
        }
	}
}