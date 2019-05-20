<?php
ini_set('html_errors', 0);
header('Content-Type: text/explan');
defined('ROOT_DIR')     or define('ROOT_DIR', __DIR__);                    //根目录
defined('RESOURCE_DIR') or define('RESOURCE_DIR', __DIR__ . '/Resource');  //资源目录
defined('LIB_DIR')      or define('LIB_DIR' , __DIR__ . '/Lib');           //类库目录
defined('CORE_DIR')     or define('CORE_DIR', __DIR__ . '/Lib/Core');      //核心类库目录
include_once CORE_DIR . '/Core.class.php';
\Core\Core::run();