<?php
namespace Route;
class Route
{
	protected static $_url;
	public static function check()
	{
		self::$_url = substr($_SERVER['REQUEST_URI'],strlen(WEB_DIR));
		method_exists(self, method_name)
	}
}