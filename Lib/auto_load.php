<?php
return function ($class_name){
	$cls = explode('\\', $class_name);
	$lib_cls = C('LIB_CLASS');
	if (in_array($cls[0],$lib_cls)){
		$path = LIB_DIR . '/' . join('/',$cls) . '.class.php';
		include $path;
	}
};