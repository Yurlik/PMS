<?php

namespace application\core;

use application\lib\Db;

abstract class Model{
	
	public $db;
	
	public function __construct(){
		$db = Db::getInstance();
	}
	
}