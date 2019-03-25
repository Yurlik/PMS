<?php

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

class ProductsController extends Controller{
	
	
	public function showAllAction(){
		
		
		$params = [
			
			'id' => 1,
			
		];
		
		//$db = new Db;
		$dbh = Db::GetInstance();
		$result = Db::qquery('SELECT * FROM products WHERE id = :id', $params);
		
		debug($result);
		
		//var_dump($res);
		$vars = [];
//		$vars = [
//			'ProdName' => 'prod1',
//			'ProdPrice' => '110',
//		];
		
		$this->view->render('Show all products', $vars);
	}
	
	
	
}