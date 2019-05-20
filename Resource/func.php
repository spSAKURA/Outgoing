<?php

/**
| function  C    读取/设置配置
| $conf_key    String 配置名称 读取数组中的值可用 "." 链接 eg: C('db.password') 读取 配置中['db']['array']的值
| $set_al      Mix    设置值   设置的配置的值
| $return      Mix    配置值   读取:配置值未定义时候返回NULL 
*/
function C($conf_key=null,$set_val=null)
{
	if(!isset($GLOBALS['config'])){
		$GLOBALS['config'] = new \Core\Config();
	}
	if($set_val === null)
	{
		return $GLOBALS['config']->readConf($conf_key);
	}
	else
	{
		return $GLOBALS['config']->setConf($conf_key,$set_val);
	}

}