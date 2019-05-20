<?php
return function ($class_name){
	$cls = explode('\\', $class_name);
	$lib_cls = C('LIB_CLASS');
	if (in_array($cls[0],$lib_cls)){
		$path = LIB_DIR . '/' . join('/',$cls) . '.class.php';
		include $path;
	}
	elseif($cls[0] === 'App')
	{
		unset($cls[0]);
		$path = ROOT_DIR . '/' . join('/',$cls) . '.class.php';
		include $path;
	}
};