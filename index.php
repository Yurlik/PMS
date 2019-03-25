<?php

require_once 'application/lib/dev.php';

use application\core\Router;
use application\lib\Db;

spl_autoload_register(function($class){
	$path = str_replace('\\','/', $class);
	$path = $path.'.php';
	
	if(file_exists($path)){
		require_once($path);
	}
});


$router = new Router;
$router->run();