<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;


class Products extends Model{
	
	public function __construct(){		
		parent::__construct();
	}
	
	public function getProducts(){
		$result = Db::qquery('SELECT * FROM products');
		return $result;
	}
	
}