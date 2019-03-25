<?php

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

class ProductsController extends Controller{
	
	
	public function showAllAction(){
		
		//$db = new Db;
		$dbh = Db::GetInstance();
		Db::qquery('SELECT * FROM products');
		
		
		
		//var_dump($res);
		$vars = [];
//		$vars = [
//			'ProdName' => 'prod1',
//			'ProdPrice' => '110',
//		];
		
		$this->view->render('Show all products', $vars);
	}
	
	
	
}